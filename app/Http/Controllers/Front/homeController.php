<?php

namespace App\Http\Controllers\Front;

use App\Models\Menus;
use App\Models\News;
use App\Models\SubMenus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function index()
    {
        $news=News::all();
        $menus=Menus::orderBy('order')->get();
        View::share('menus', $menus);
        View::share('news', $news);

        return view('Front.Home.index');
    }

    public function page($id)
    {
        $menus = Menus::orderBy('order')->get();
        View::share('menus', $menus);

        $menu=Menus::find($id);
        View::share('menu',$menu);

        return view('Front.Layouts.page');
    }

    public function spage($id)
    {
        $menus = Menus::orderBy('order')->get();
        View::share('menus', $menus);

        $menu=SubMenus::find($id);
        View::share('menu',$menu);

        return view('Front.Layouts.subpage');
    }
}
