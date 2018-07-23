<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Website;
use App\Models\Home;

class HomeController extends Controller
{
    public function index ()
    {
        $home = Home::find(1); // 取得id (primarykey) = 1的資料
        $website = Website::find(1); // 取得id (primarykey) = 1的資料
        return view('frontend.index', compact('home', 'website'));
    }
}
