<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;

class GiftController extends Controller
{
    public function create(){
        return view('new_gift');
    }

    public function index(){
        $gifts = Gift::all();
        return view('gifts', compact('gifts'));
    }

    public function store(Request $request){
        $request->validate([
            'gift_name' => 'required|string|max:255',
            'price' => 'required|integer',
            'gift_type_id' => 'required|integer'
        ]);
        Gift::create($request->all());
        return redirect()->back()->with('success','Gift created');
    }
}
