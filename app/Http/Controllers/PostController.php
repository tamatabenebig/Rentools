<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=[
            'Mon super premier titre',
            'mon super second titre'
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

public function categorie()
{
    $posts = Post::all();


    return view('categorie', [
        'posts' => $posts
    ]);
}
public function rentals()
{
    return view('rentals');
}
}


