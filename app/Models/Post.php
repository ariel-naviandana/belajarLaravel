<?php

namespace App\Models;

use Illuminate\Support\Arr;

Class Post
{
    public static function all(){
        return [
            [
            'id'=> 1,
            'slug'=>'Artikel-1-1',
            'title' => 'Artikel 1',
            'author'=> 'Ariel',
            'date'=> '25 September 2024',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, laborum? Laborum, sunt omnis minus nostrum similique ipsum nam porro nesciunt quis? Quis fuga magni debitis, similique, quas, maxime at animi vitae nisi nostrum dolorum vel iste odit inventore voluptatibus. Error tenetur nulla fugiat placeat autem provident quasi blanditiis culpa tempore?',
            ],
            [
            'id'=> 2,
            'slug'=>'Artikel-2-2',
            'title' => 'Artikel 2',
            'author'=> 'Putra',
            'date'=> '30 September 2024',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, laborum? Laborum, sunt omnis minus nostrum similique ipsum nam porro nesciunt quis? Quis fuga magni debitis, similique, quas, maxime at animi vitae nisi nostrum dolorum vel iste odit inventore voluptatibus. Error tenetur nulla fugiat placeat autem provident quasi blanditiis culpa tempore?',
            ]
            ];
    }

    public static function find($slug){
        // return Arr::first(static::all(), function($post)use ($slug){
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }
}
