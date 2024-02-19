<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news =   News::all();
        return view('Admin.News.index',compact('news'));
    }

    public function addnews()
    {
        return view('Admin.News.addnews');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/news'))
            {
                mkdir('uploads/news', 0777 , true);
            }
            $image->move('uploads/news',$imagename);
        }

        $news = new News();
        $news->title = $request->title;
        $news->url = $request->url;
        $news->sub_title = $request->sub_title;
        $news->slug = $slug;
        $news->short = $request->short;
        $news->news = $request->news;
        $news->notice = $request->notice;

        $news->description = $request->description;
        $news->image = $imagename;
        $news->save();
        return redirect()->route('news.index')->with('successMsg','News Successfully Saved');

    }

    public function edit($id)
    {
        $news =   News::find($id);
        return view('Admin.News.editnews',compact('news'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        $news = News::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/news'))
            {
                mkdir('uploads/news', 0777 , true);
            }
            $image->move('uploads/news',$imagename);
        }else {
            $imagename = $news->image;
        }

        $news->title = $request->title;
        $news->sub_title = $request->sub_title;
        $news->url = $request->url;
        $news->slug = $slug;
        $news->short = $request->short;
        $news->description = $request->description;
        $news->news = $request->news;
        $news->notice = $request->notice;
        $news->image = $imagename;
        $news->save();
        return redirect()->route('news.index')->with('successMsg','News Successfully Updated');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        if (file_exists('uploads/news/'.$news->image))
        {
            unlink('uploads/news/'.$news->image);
        }
        $news->delete();
        return redirect()->back()->with('successMsg','News Successfully Deleted');
    }
}
