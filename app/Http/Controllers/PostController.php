<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

     public function index(Request $request)
    {
        $posts = Post::all();
        return view('list', compact('posts'));
    }

    
    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Post::create($request->all()); 
        return redirect('post');
    }


    public function edit($id)
    {
        $post = Post::find($id); 
return view('create',compact('post'));
    }

    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all()); 
return redirect('post');

    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('post');
    }

}
   