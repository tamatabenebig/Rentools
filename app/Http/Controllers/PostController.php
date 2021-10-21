<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super premier titre',
            'Mon super second titre'
        ];

        return view('article', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts = [
            1 => 'mon titre n°1',
            2 => 'mon titre n°2'
        ];

        $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post' => $post
        ]);

    }

  
    public function contact()
    {
        return view('contact');
    }


public function inscription()
{
    return view('inscription');
}

public function connexion()
{
    return view('connexion');
}

}


