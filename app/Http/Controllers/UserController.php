<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts;

        return view('posts.index')
            ->with('posts',$posts)
            ->with('title',$user->fullname)
            ->with('head', $user->fullname)
            ->with('subhead', $user->email);
    }

}
