<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = DB::table('posts')->limit(5)->get();
        $posts = Post::orderBy('created_at','desc')->get();

        return view('posts.index',compact('posts'));
    }

    public function allPosts()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
//        $validatedData = $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required|max:255',
//            'content' => 'required',
//            'tags' => 'array'
//        ]);

        $post = Auth::user()->posts()->create( $request->all() );

        $post->tags()->sync( $request->get('tags') ?: [] );

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();

        $this->authorize('edit-post',$post);

        return view('posts.edit')
            ->with('post',$post)
            ->with('tags', $tags)
            ->with('head', $post->title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('edit-post',$post);

        $post->update( $request->all() );
        $post->tags()->sync( $request->input('tags') ? : []);

        return redirect()->route('post.show', $post->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
