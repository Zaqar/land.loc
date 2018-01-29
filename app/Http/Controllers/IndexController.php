<?php

namespace App\Http\Controllers;

use App\Page;
use App\People;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function execute(Request $request) {
        $pages = Page::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $peoples = People::all();

        $menu = array();

        foreach ($pages as $page) {
            $item = ['title'=>$page->name, 'alias'=>$page->alias];
            array_push($menu, $item);
        }

        $item = ['title'=>'Services', 'alias'=>'service'];
        array_push($menu, $item);
        $item = ['title'=>'Portfolios', 'alias'=>'Portfolio'];
        array_push($menu, $item);
        $item = ['title'=>'Team', 'alias'=>'team'];
        array_push($menu, $item);
        $item = ['title'=>'Contact', 'alias'=>'contact'];
        array_push($menu, $item);

        return view('site.index',array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios'=> $portfolios,
            'peoples'=>$peoples
        ));

    }
}
