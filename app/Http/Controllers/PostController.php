<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CommentsController;
use App\Models\Comments;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        /*$post = Post::find(1);
   
        $comment1 = new Comments;
        $comment1->comment = "nuevo comentario 1";
           
        $comment2 = new Comments;
        $comment2->comment = "nuevo comentario 2";
           
        $post = $post->comments()->saveMany([$comment1, $comment2]);
        /*
        $comments = Post::find(1)->comments;
        echo $comments;

        $comment = Comment::find(1);
        $post = Post::find(2);
           
        $comment->post()->associate($post)->save();

       /* $post = new Post();
        $post->nombre = "Juan Carlos";
        $post->save();
        echo("CREADO CON EXITO");*/

        $comment = Comments::get();
        return view('post',['posts'=>$comment]);
    }
}

