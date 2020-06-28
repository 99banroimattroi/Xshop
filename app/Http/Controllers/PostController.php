<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return view('admin.posts.index', compact('posts'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        $request['slug'] = Str::slug($request->title);
        $image = $this->upload($request->file('file'), 'admin_asset/img/post/');
        $request->merge(['image' => $image]);

        Post::create($request->all());
    
        return redirect()->route('posts.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('admin/posts/');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return back();
    }

    public function upload($file, $path)
    {
        $name = sha1(date('YmdHis') . Str::random(5) . Str::random(2)) . '.' . $file->getClientOriginalExtension();

        $file->move($path, $name);

        return $path . $name;
    }
}
