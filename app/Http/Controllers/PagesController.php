<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');

    }
    function store(Request $request)
    {
        // dd($request);
        $name = request()-> name;

        return redirect() -> route('thanks',['name' => $name]);
    }

    function thanks($name, Request $request)
    {
        //dd($request);
        return view('pages.thankyou')->with(compact(['name']));
    }
}
