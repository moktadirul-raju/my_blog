<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);
        // get form image
        if($request->hasFile('image')) {

        if($file = $request->file('image')) {
            $image = time().$file->getClientOriginalName();
            $imageName = $image;
            $file->move('images/category',$imageName);
        }
        
        $category = new Category();
        $category->name = $request->name;
        $category->image = $imageName;
        $category->slug = str_slug("category".$request->name);
        $category->save();
        Toastr::success('Category Successfully Saved :)' ,'Success');
        return redirect()->route('admin.category.index');
}
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
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
        $this->validate($request,[
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);
        // get form image
        $image = $request->file('image');
        $category = Category::find($id);
        if($file = $request->file('image')) {
            if(file_exists('images/category/'.$category->image) AND !empty($category->image)){
                unlink('images/category/'.$category->image);
            }
            $image = time().$file->getClientOriginalName();
            $imageName = $image;
            $file->move('images/category',$imageName);
        } else{
            $imageName = $category->image;
        }

        $category->name = $request->name;
        $category->image = $imageName;
        $category->slug = str_slug("category".$request->name);
        $category->save();
        Toastr::success('Category Successfully Updated :)' ,'Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $category = Category::FindOrFail($id);

        if(file_exists('images/category/'.$category->image) AND !empty($category->image)){
            unlink('images/category/'.$category->image);
        }
        try{

            $category->delete();
            $bug = 0;
        }
        catch(\Exception $e){
            $bug = $e->errorInfo[1];
        }
        if($bug==0){
                  Toastr::success('Category Successfully Deleted :)' ,'Success');
        return redirect()->route('admin.category.index');
        }else{
            Toastr::success('Category Not Deleted  :)' ,'Success');
        return redirect()->route('admin.category.index');
        }
    }
}
