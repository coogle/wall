<?php

namespace App\Http\Controllers;

use App\Models\Wall;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function wall()
    {
        $entries = Wall::orderBy('created_at', 'DESC')
                       ->get();
        
        return view('wall', compact('entries'));
    }
    
    public function post(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:1|max:65500'
        ]);
        
        $wall = new Wall();
        $wall->message = strip_tags($request->get('content'));
        $wall->save();
        
        return redirect('/');
    }
}