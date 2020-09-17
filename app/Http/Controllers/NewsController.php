<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('status', 1)->orderBy('created_at', 'asc')->get();
        return view('admin.news.index', compact('news'));
    }

    public function archiveNews()
    {
        $news = News::where('status', 0)->orderBy('created_at', 'asc')->get();
        return view('admin.news.index', compact('news'));
    }
    


    public function toggleBlogActiveStatus(News $news)
    {
        if ($news->status) {
            $news->status = 0;
        } else {
            $news->status = 1;
        };
        $news->save();
        return redirect()->back()->withSuccess("News Status Changed");

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->news;

        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
            $data['image'] = $image;
        }

        News::create($data);
        return redirect()->back()->withSuccess("News Successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $data = $request->news;

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
            $data['image'] = $image;
        }

        $news->update($data);
        return redirect()->back()->withSuccess("News Successfully Updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function uploadImage($image)
    {
        $name = Uuid::generate()->string . '.' . $image->getClientOriginalExtension();;
        // uploading images to folder
        $image->move('news/images', $name);
        return $name;
    }
}
