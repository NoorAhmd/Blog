<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel 5";
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming','Etc']
        );
        return view('pages.services')->with($data);
    }
    public function login(){
        return view('pages.login');
    }
}
