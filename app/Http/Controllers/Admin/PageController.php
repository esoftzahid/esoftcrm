<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        $page =   Page::all();
        return view('Admin.Page.index',compact('page'));
    }
    public function addpage()
    {
        $menu_all   =   Menu::all();
        return view('Admin.Page.addpage',compact('menu_all'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'title_uri' => 'required',
        ]);
        $slug = $request->title_uri;
        $page = new Page();
        $page->title = $request->title;
        $page->title_uri = $slug;
        $page->short = $request->short;
        $page->description = $request->description;
        $page->save();
        return redirect()->route('page.index')->with('successMsg','Page Successfully Saved');
    }
    public function edit($id)
    {
        $page =   Page::find($id);
        $menu_all   =   Menu::all();
        $parent_root_id = Page::orderBy('id','DESC')
            ->where('title_uri',$page->title_uri)->first();
        $parent_id_for = Menu::orderBy('id','DESC')
            ->where('slug',$parent_root_id->title_uri)->first();

        return view('Admin.Page.editpage',compact('page','menu_all','parent_id_for'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'title_uri' => 'required',

        ]);
        $slug = $request->title_uri;
        $page = Page::find($id);
        $page->title = $request->title;
        $page->title_uri = $slug;
        $page->short = $request->short;
        $page->description = $request->description;
        $page->save();
        return redirect()->route('page.index')->with('successMsg','Page Successfully Updated');
    }
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->back()->with('successMsg','Page Successfully Deleted');

    }
}
