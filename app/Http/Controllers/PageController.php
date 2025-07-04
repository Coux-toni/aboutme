<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // welcome
    public function index(){
        return view('welcome');
    }
    public function impressum(){
        return view('impressum');
    }
    public function blog(){
        return view('blog');
    }
    public function links(){

        $links = Link::all();



        return view('links',[
            'mylinks' => $links
        ]);
    }
    public function hobbies(){
        return view('hobbies');
    }

    public function aboutme(){
        return view('aboutme');
    }

    public function start(Request $request){
        return view('start',[
            "heading" => "Willkommen auf meiner Website",
            "content" => "Schön, dass du hierher gefunden hast. Ich bin <strong>Antonio</strong>. <script>alert('hallo');window.top.location='https://www.hakzell.at';</script>"
        ]);
    }
}
