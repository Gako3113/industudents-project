<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    public function index(Post $post, Request $request)
    {
        
        $posts = Post::all();
        return view('posts/index', ['posts' => $posts])->with(['posts' => $post->getPaginateByLimit(9)]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Request $request)
    {
        return view('posts/create');
    }
    
    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        //s3アップロード開始
        $image = $request->file('image');
        if($image){
            // バケットの`myprefix`フォルダへアップロード
            $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
            // アップロードした画像のフルパスを取得
            $input['image_path'] = Storage::disk('s3')->url($path);
    
        }else{
            $path = null;
        }
        
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
