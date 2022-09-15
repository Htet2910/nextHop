<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App;
use App\About;
use App\Partner;
use App\Service;
use DB;

class HomeController extends Controller
{

    public function home()
    {
        $about = About::all();
        $partner=Partner::all();
        $service=Service::all();

        foreach ($service as $key => $value) {
            $value->body=strip_tags($value->body);
        }
        
        return view('frontend.home',compact('about','partner','service'));
    }
}
