<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        $menu =   Menu::all();
        return view('Admin.Menu.index',compact('menu'));
    }
    public function create()
    {
        $main   =   Menu::orderBy('id','DESC')
            ->where('display',1)
            ->get();
        $sub_main   =   Menu::orderBy('id','ASC')
            ->whereNotNull('root_id')
            ->whereNull('sroot_id')
            ->get();
        $sroot_main   =   Menu::orderBy('id','ASC')
            ->whereNotNull('sroot_id')
            ->whereNull('troot_id')
            ->get();
        return view('Admin.Menu.addmenu',compact('main','sub_main','sroot_main'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'menu_name' => 'required',
        ]);


        $slug = Str::slug($request->menu_name);
        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->slug = $slug;
        $menu->root_id = $request->root_id;
        $menu->sroot_id = $request->sroot_id;
        $menu->troot_id = $request->troot_id;
        $menu->page_type = $request->page_type;
        $menu->external_link = $request->external;
        $menu->target = $request->target;
        $menu->display = $request->display;
        $menu->sequence = $request->sequence;
        $menu->footer1 = $request->footer1;
        $menu->sequence = 0;

        $menu->save();
        return redirect()->route('menu.index')->with('successMsg','Menu Successfully Saved');
    }

    public function edit($id)
    {
        $menu =   Menu::find($id);

        $main   =   Menu::orderBy('id','DESC')
            ->where('display',1)
            ->get();
        $menu_all   =   Menu::all();

        $parent_root_id = Menu::orderBy('id','DESC')
            ->where('root_id',$menu->root_id)->first();

        $parent_id_for = Menu::orderBy('id','DESC')
            ->where('id',$parent_root_id->root_id)->first();

        $sub_menu_id = Menu::orderBy('id','DESC')
            ->where('sroot_id',$menu->sroot_id)->first();

        $sub_id_for = Menu::orderBy('id','DESC')
            ->where('id',$sub_menu_id->sroot_id)

            ->first();
        $sub_main   =   Menu::orderBy('id','ASC')
            ->whereNotNull('root_id')
            ->whereNull('sroot_id')
            ->get();
        $last_menu_id = Menu::orderBy('id','DESC')
            ->where('troot_id',$menu->troot_id)->first();

        $last_id_for = Menu::orderBy('id','DESC')
            ->where('id',$last_menu_id->troot_id)->first();

        return view('Admin.Menu.editmenu',compact('menu','sub_main','main','parent_id_for','sub_id_for','menu_all','last_id_for'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'menu_name' => 'required',
        ]);

        $slug = str_slug($request->menu_name);
        $menu = Menu::find($id);

        $menu->menu_name = $request->menu_name;
        $menu->slug = $slug;
        $menu->root_id = $request->root_id;
        $menu->sroot_id = $request->sroot_id;
        $menu->troot_id = $request->troot_id;
        $menu->page_type = $request->page_type;
        $menu->external_link = $request->external;
        $menu->target = $request->target;
        $menu->display = $request->display;
        $menu->sequence = $request->sequence;
        $menu->footer1 = $request->footer1;
        $menu->save();
        return redirect()->route('menu.index')->with('successMsg','Menuu Successfully Updated');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('successMsg','Menu Successfully Deleted');
    }
    public function searchajax(Request $req)
    {

        if($req->keywords!="")
        {
            $keywords=$req->keywords;
            $colid=$req->colid;
            $searchresults = DB::table('menus')->where($colid,$keywords)->get();
            $displayvar = '';
            $p1 = "'lastcatid'";
            $p2 = "'sroot_id'";

            if($colid =="root_id"){
                $displayvar .= '<select name="sroot_id" class="form-control" onchange="ajaxSearch(this.value,'.$p1.','.$p2.')">';
            }
            else{
                $displayvar .= '<select name="troot_id" class="form-control">';
            }
            $displayvar .= '<option value="">Select Category</option>';
            foreach($searchresults as $rows):
                $displayvar .='<option value="'.$rows->id.'">'.$rows->menu_name.'</option>';
            endforeach;
            $displayvar .= '</select>';
            echo $displayvar;
        }
        else{
            echo "Null";
        }
    }
}
