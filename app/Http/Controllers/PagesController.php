<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = 'Home Page';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About Page';
        return view('pages.about')->with('title', $title);

    }

    public function services()
    {
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Design', 'Web Develop', 'Testing']
        );
        return view('pages.services')->with($data);

    }
}
