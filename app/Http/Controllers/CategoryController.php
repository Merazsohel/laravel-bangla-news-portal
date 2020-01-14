<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'position' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->position = $request->position;
        $category->created_at = Carbon::now();
        $category->save();
        toast('category created!','success');
        return redirect()->back();
    }

    public function all()
    {
        $categories = Category::select('id','name','position')->get();
        $no = 1;
        return view('admin.category.list',compact('categories','no'));
    }

    public function delete($id)
    {
        Category::destroy($id);
        toast('deleted!','success');
        return redirect()->back();
    }

    public function edit($id)
    {
      $category =  Category::find($id);
      $categories = Category::select('position')->get();
      return view('admin.category.edit',compact('category','categories'));

    }

    public function update(Request $request,$id)
    {
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->position = $request->position;
        $category->updated_at = Carbon::now();
        $category->save();
        toast('category updated!','success');
        return redirect()->back();
    }
}
