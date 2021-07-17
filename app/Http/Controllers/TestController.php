<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Phone;
use App\Models\Comment;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $user = User::find(1);	
        //return $user->roles;
        //return $user->phone;
        //return $user->posts;

        $rol = Role::find(1);	
        // return $rol->users;

        $post = Post::find(1);	
        // return $post->comments;
        //return $post->user;

        $phone = Phone::find(5);	
        //return $phone->user;

        $comment = Comment::find(25);	
        return $comment->post;
    }
}
