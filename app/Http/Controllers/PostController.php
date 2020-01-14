<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->slug = $this->slugify($request->title);
        $post->categoryId = $request->categoryId;
        $post->featuredPosition = $request->featuredPosition;
        $post->created_at = Carbon::now();

        $image = $request->file('image');

        if ($image) {
            $imageName = Str::random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'public/news-image/';
            $imageUrl = $uploadPath . $imageFullName;
            $success = $image->move($uploadPath, $imageFullName);
            if ($success) {
                $post->image = $imageUrl;
                $post->save();
                toast('post created!', 'success');
                return redirect()->back();
            }
        } else {
            $post->save();
            toast('news created!', 'success');
            return redirect()->back();
        }


    }

    public function all()
    {
        $posts = Post::select('id', 'title', 'image', 'categoryId', 'breakingNews', 'created_at')->get();
        $no = 1;
        return view('admin.post.list', compact('posts', 'no'));
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        unlink($post->image);

        $post->delete();

        toast('news deleted!', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        $categories = Category::select('id', 'name')->get();
        return view('admin.post.edit', compact('post', 'categories'));

    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->slug = $this->slugify($request->title);
        $post->categoryId = $request->categoryId;
        $post->featuredPosition = $request->featuredPosition;
        $post->updated_at = Carbon::now();
        $oldImage = $post->image;
        $image = $request->file('image');

        if ($image) {

            $imageName = Str::random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $imageName . '.' . $ext;
            $uploadPath = 'public/news-image/';
            $imageUrl = $uploadPath . $imageFullName;
            $success = $image->move($uploadPath, $imageFullName);
            if ($success) {
                $post->image = $imageUrl;
                $post->save();
                unlink($oldImage);
                toast('post updated!', 'success');
                return redirect()->back();
            }
        } else {
            $post->save();

            toast('news updated!', 'success');
            return redirect()->back();
        }

    }


    public function nonBreaking($id)
    {
        $data = array();
        $data['breakingNews'] = 1;
        DB::table('posts')
            ->where('id', $id)
            ->update($data);

        toast('This news is breaking news!', 'success');
        return redirect()->back();

    }

    public function breaking($id)
    {
        $data = array();
        $data['breakingNews'] = 0;
        DB::table('posts')
            ->where('id', $id)
            ->update($data);

        toast('This news is non breaking news!', 'success');
        return redirect()->back();
    }
    public function slugify($string){
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
