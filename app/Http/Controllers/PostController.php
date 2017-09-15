<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;

class PostController extends Controller
{
    public function listPost() {
        $posts = Post::all();
        $cate = new CategoryController();
        $categories = $cate->getCategory();
        return view('posts.list',["posts" => $posts, "categories" => $categories]);
    }

    public function showAddFormPost() {
        $cate = new CategoryController();
        $categories = $cate->getCategory();
        $us = new UserController();
        $user = $us->getUser();
        return view('posts.formAddPost',["categories" => $categories, "users" => $user]);
    }

    public function addFormPost(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->summary = $request->input('summary');
        $post->content = $request->input('content');
        $post->like = $request->input('like');
        $post->category_id = $request->input('category_id');
        $post->user_id = $request->input('user_id');
        $post->image = $request->input('image');
        // insert a file
        if($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAS('public/images/post',$fileName);
            $post->image = $fileName;
        } else {
            return "Not file selected";
        }
        $post->save();
    }
}
