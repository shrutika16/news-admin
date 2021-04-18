<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news_portal;

class NewsPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_portals = news_portal::get();
        return view('news-portal.list', compact('news_portals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news-portal.create');
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
            'title' => ['required', 'unique:news_portals'],
            'slug' => ['required'],
        ]);

        $newsPortal = new news_portal;
        $newsPortal->title = $request->title;
        $newsPortal->slug = $request->slug;
        $newsPortal->save();

        return redirect('news_portal')->with('message', 'News Portal added successfully');
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
        $newsPortal = news_portal::find($id);
        return view('news-portal.edit', compact('newsPortal'));
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
            'slug' => ['required'],
        ]);

        $newsPortal = news_portal::find($id);
        $newsPortal->title = $request->title;
        $newsPortal->slug = $request->slug;
        $newsPortal->save();

        return redirect('news_portal')->with('message', 'News Portal updated successfully');
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
        $newsPortal = news_portal::find($id);

        $news = $newsPortal->news->toArray();
        if(!empty($news)){
            return redirect('news_portal')->with('error', "Can't delete news portal! news are available for this portal");
        }
        $newsPortal->delete();

        return redirect('news_portal')->with('message', 'News Portal deleted successfully');
    }
}
