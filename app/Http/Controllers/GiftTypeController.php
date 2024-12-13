<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftType;

class GiftTypeController extends Controller
{
    public function create(){
        return view('new_gift_type');
    }

    public function store(Request $request){
        $request->validate([
            'type' => 'required|string|max:255'
        ]);
        GiftType::create($request->all());
        return redirect()->back()->with('success','Gift type created');
    }

    public function index(){
        $giftypes = GiftType::all();
        return view('gift_ytpes', compact('gift_types'));
    }
}
