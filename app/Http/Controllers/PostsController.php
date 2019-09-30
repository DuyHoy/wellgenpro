<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Intervention\Image\Facades\Image as Image;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $allposts=App\Posts::with('category')->get();
        // return $allposts;
        return view('admin.allposts',compact('allposts'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=App\Categories::all();
        return view('admin.createPosts',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
    $post=new App\Posts();
    $post->title=request('title');
    $post->content=request('mytextarea');
    $post->categories_id=request('categories_id');
    $post->save();  
    // return redirect('category');

    if($request->hasFile('images')){
        $image=$request->file('images');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location= public_path('images/'. $filename);
        Image::make($image)->resize(800,400)->save($location);
        // $imageConvert=new App\Images();
        // $imageConvert->img=$filename;
        // $imageConvert->posts_id=$post->id;
        $post->images()->saveMany([
            new App\Images(['img' => $filename],['posts_id' => $post->id]),
           
        ]);
        // $imageConvert->save();
    }
    // $img = Image::make('foo.jpg')->resize(300, 200);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        
        $post=App\Posts::findOrFail($id);
        $categories =App\Categories::all();
        return view('admin.editPosts',['post' =>$post,'categories'=>$categories ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    // dd($request->all());
    $post=App\Posts::find($id);
    $post->title=request('title');
    $post->content=request('content');
    $post->categories_id=request('categories_id');
    $post->save();
    return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        App\Posts::destroy($id);
        return redirect('posts');
    }
}
