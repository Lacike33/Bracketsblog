<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        return view('posts.index')
            ->with('posts',$tag->posts)
            ->with('title',$tag->name)
            ->with('head', 'Tag: ' . $tag->name )
            ->with('subhead', 'All posts with tag <strong>'. strtoupper( $tag->name) .'</strong>');
    }
}
