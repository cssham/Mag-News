<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::with('user','category')->get();

        return response()->json([
            'posts' => $posts
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id'=>'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        //image upload using vue
        $strpos = strpos($request->image,';'); //position of semicolon
        $sub = substr($request->image,0,$strpos); //string before semicolon
        $extension = explode('/',$sub)[1];
        $imageName = $request->title.time().".".$extension;
        $image =Image::make($request->image)->resize(870,350);
        $uploadPath = public_path()."/storage/posts/";
        $image->save($uploadPath.$imageName);

        $post = new Post();
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->comment_id = 0;
        $post->title = $request->title;
        $post->image = $imageName;
        $post->description=$request->description;

        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return response()->json([
            'post' => $post
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'category_id'=>'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        //image upload using vue
        if($request->image!=$post->image){

        $strpos = strpos($request->image,';'); //position of semicolon
        $sub = substr($request->image,0,$strpos); //string before semicolon
        $extension = explode('/',$sub)[1];
        $imageName = $request->title.time().".".$extension;
        $image =Image::make($request->image)->resize(870,350);
        $uploadPath = public_path()."/storage/posts/";
        $oldImage = $uploadPath. $post->image;
        if (file_exists($oldImage)) {
            @unlink($oldImage);
        }
        $image->save($uploadPath.$imageName);

        }
        else {
            $imageName =$post->image;
        }

        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->comment_id = 0;
        $post->title = $request->title;
        $post->image = $imageName;
        $post->description=$request->description;

        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $uploadPath = public_path() . "/storage/posts/";
        $image =$uploadPath.$post->image;
        if (file_exists($image)) {
            @unlink( $image);
        }
        $post->delete();
    }
}
