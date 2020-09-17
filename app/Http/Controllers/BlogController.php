<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $blogs = Blog::whereStatus(1)->orderBy('created_at', 'asc')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function archiveBlogs()
    {
        $blogs = Blog::whereStatus(0)->orderBy('created_at', 'asc')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function toggleBlogActiveStatus(Blog $blog)
    {
        if ($blog->status) {
            $blog->status = 0;
        } else {
            $blog->status = 1;
        };
        $blog->save();
        return redirect()->back()->withSuccess("Blog Status Changed");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->blog;
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
            $data['image'] = $image;
        }
        Blog::create($data);
        return redirect()->back()->withSuccess("Blog Successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return void
     */
    public function show(Blog $blog)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Factory|View
     */
    public function edit(Blog $blog)
    {

        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.blog.edit', compact('blog', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return Response
     */
    public function update(Request $request, Blog $blog)
    {

        $data = $request->blog;
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
            $data['image'] = $image;
        }

        $blog->update($data);
        return redirect()->back()->withSuccess("Blog Successfully Updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return void
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function uploadImage($image)
    {
        $name = Uuid::generate()->string . '.' . $image->getClientOriginalExtension();;
        // uploading images to folder
        $image->move('blog/images', $name);
        return $name;
    }

}
