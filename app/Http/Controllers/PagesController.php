<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title='Welcome to laravael';
        return view('pages/index')->with('title',$title);
    }
    public function about()
    {
        return view('pages/about');
    }
    public function services()
    {
        $data=array(
            'title'=>'Services',
            'services'=>['siacoin','golem','shitcoin']
        );
        return view('pages/services')->with($data);
        ;
    }

  
}
