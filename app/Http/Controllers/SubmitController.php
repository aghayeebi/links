<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function input()
    {
        return view('submit');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url|max:255',
            'description' => 'required|max:255'
        ]);

        $link = new Link();
        $link->title = $data['title'];
        $link->url = $data['url'];
        $link->description  = $data['description'];
        $link->save();

        return redirect('/');
    }
}
