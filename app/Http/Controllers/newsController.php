<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ {news , Category, news_portal};

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::with('category', 'news_portal')->get();
        // dd($news->toArray());
        return view('news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $newsPortals = news_portal::get();
        return view('news.create' , compact('categories', 'newsPortals'));
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
            'title' => ['required'],
            'img_src' => ['required'],
            'news_url' => ['required'],
            'short_desc' => ['required'],
            'long_desc' => ['required'],
            'date_time' => ['required'],
            'category' => ['required'],
            'news_portal' => ['required'],
            'status' => ['required']
        ]);

        $news = new news();
        $news->title = $request->title;
        $news->img_src = $request->img_src;
        $news->news_url = $request->news_url;
        $news->short_desc = $request->short_desc;
        $news->long_desc = $request->long_desc;
        $news->date_time = $request->date_time;
        $news->news_portal_id = $request->category;
        $news->category_id = $request->news_portal;
        $news->is_active = $request->status;
        $news->save();

        return redirect('news')->with('message', 'News added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = news::find($id);
        $categories = Category::get();
        $newsPortals = news_portal::get();
        return view('news.edit', compact('news', 'categories', 'newsPortals'));
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
        $request->validate([
            'title' => ['required'],
            'img_src' => ['required'],
            'news_url' => ['required'],
            'short_desc' => ['required'],
            'long_desc' => ['required'],
            'date_time' => ['required'],
            'category' => ['required'],
            'news_portal' => ['required'],
            'status' => ['required']
        ]);

        $news = news::find($id);
        $news->title = $request->title;
        $news->img_src = $request->img_src;
        $news->news_url = $request->news_url;
        $news->short_desc = $request->short_desc;
        $news->long_desc = $request->long_desc;
        $news->date_time = $request->date_time;
        $news->news_portal_id = $request->category;
        $news->category_id = $request->news_portal;
        $news->is_active = $request->status;
        $news->save();

        return redirect('news')->with('message', 'News Changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $news = news::find($id);
        $news->delete();

        return redirect('news')->with('message', 'News deleted successfully');
    }
}
