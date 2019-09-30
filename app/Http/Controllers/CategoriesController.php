<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories =App\Categories::all();
        return view('admin.allcategories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories =App\Categories::all();
        return view('admin.createcategories',compact('categories'));
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
    $category=new App\Categories();
    $category->name=request('registerUsername');
    $category->save();
    return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category =App\Categories::findOrFail($id);
        return view('admin.editCategories',compact('category'));
        
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
        // dd($request->all());
        //
    $category=App\Categories::find($id);
    $category->name=request('registerUsername');
    $category->save();
    return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct()
{
    $this->middleware('auth');
}
    public function destroy($id)
    {
        //
        App\Categories::destroy($id);
        return redirect('category');
    }
}
