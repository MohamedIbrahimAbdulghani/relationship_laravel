<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::find(1);
        return $post->comments;


        // foreach($post->comments as $comments):
        //     echo "<li>{$comments->body}</li>";
        // endforeach;


        // $comments = Comment::find(3);
        // return $comments->post;
    }
}
