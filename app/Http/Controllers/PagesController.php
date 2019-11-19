<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = 'Home Page';
        //return view('pages.index', compact('title'));
        return 'Hello';
    }

    public function about()
    {
        $title = 'About Page';
        //return view('pages.index')->>with('title', $title);
        return 'Hello';
    }

    public function services()
    {
        $data = array(
            'title' => 'Services Page',
            'services' => ['Web Design', 'Web Develop', 'Testing']
        );
        //return view('pages.index')->with($data);
        return 'Hello';
    }
}
