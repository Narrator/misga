<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Post;

use Illuminate\Support\Collection;

class PostController extends Controller
{
    
    public function allPosts(Request $request)
    {
        $posts = Post::all();
        foreach  ($posts as $post) {
            $user = User::where('id', $post->user_id)->first();
            $post->user = $user;
        }
        return view('news', compact('posts'));
    }
    
    public function newPost(Request $request)
    {
        
        if (\Auth::user())
        {
            return view('new-post');
        }
        else
        {
             return redirect('access-denied');
        }
    }

    public function viewPost(Request $request, Post $post)
    {
        $user = User::where('id', $post->user_id)->first();
        return view('post-single', compact('post', 'user'));
    }
    
    public function goToEditPost(Request $request, Post $post)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $post->user_id || \Auth::user()->isAdmin()))
        {
            return view('edit-post', compact('post'));
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function editPost(Request $request, Post $post)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $post->user_id || \Auth::user()->isAdmin()))
        {
            if (strlen($request->title) > 0) {
                $post->title = $request->title;
            }
            
            if (strlen($request->body) > 0) {
                $post->body =  $request->body;
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('posts/images', $name);
                
                $path = "/posts/images/{$name}";
                
                $post->picture =  $path;
            }
            
            $post->save();
            
            return redirect('news-single/' . $post->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function addPost(Request $request)
    {
        
        $post = new Post;
        
        if(\Auth::user())
        {

            if (strlen($request->title) > 0) {
                $post->title = $request->title;
            }
            
            if (strlen($request->body) > 0) {
                $post->body =  $request->body;
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('posts/images', $name);
                
                $path = "/posts/images/{$name}";
                
                $post->picture =  $path;
            }
            
            $post->status = 'pending';
            
            $post->user_id = \Auth::user()->id;
            
            $post->save();
            
            return redirect('news-single/' . $post->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }

}
