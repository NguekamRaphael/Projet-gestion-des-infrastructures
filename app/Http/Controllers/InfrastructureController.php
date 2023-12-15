<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfrastructureController extends Controller
{
    public function getAllStruc()
    {
        $posts = DB::table('infrastructures')->get();
        return view('post_infrastructure',compact('posts'));
    }

    public function addStruc()
    {
        return view('infrastructure');
    }

    public function addStrucSubmit(Request $request)
    {
        DB::table('infrastructures')->insert([
            'nom' => $request->nom,
            'lieu' => $request->lieu,
            'photo' => $request->photo,
            
        ]);
        return back()->with('structures_created','Post has been created successfully!');
}
public function getStrucById($nom)
{
    $struc = DB::table('infrastructures')->where('nom',$nom)->first();
    return view('display_infrastructure',compact('struc'));
}

}