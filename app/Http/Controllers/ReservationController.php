<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('reservations')->get();
        return view('reservation',compact('posts'));
    }

    public function addPost()
    {
        return view('add_reservation');
    }

    public function addPostSubmit(Request $request)
    {
        DB::table('reservations')->insert([
            'nom' => $request->nom,
            'email' => $request->email,
            'matricule' => $request->matricule,
            'motif' => $request->motif,
            'date' => $request->date,
             'status' => "En cours"
        ]);
        return back()->with('post_created','Post has been created successfully!');
    }

    public function getPostById($id)
    {
        $post = DB::table('reservations')->where('id',$id)->first();
        return view('single_post',compact('post'));
    }

    public function deletePost($id)
    {
        $post = DB::table('reservations')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!');
    }

    public function editPost($id)
    {
        $post = DB::table('reservations')->where('id',$id)->first();
        return view('edit_post',compact('post'));
    }

    public function updatePost(Request $request)
    {
        DB::table('reservations')->where('id',$request->id)->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'matricule' => $request->matricule,
            'motif' => $request->motif,
            'date' => $request->date,
            'status' => "Encours"
        ]);
        return back()->with('post_updated','Post has been updated successfully!');
    }

    public function updateStatusPost(Request $request)
    {
        $status = $request->input('status');
        if ($status === 'accept') {
            $item->status = 'accept';
            $item->save();
            return response()->with('message','Statut mis à jour avec succès');
        }
        
    }  

       public function deleteStatusPost(Request $request)
       {
        $status = $request->input('status');
if($status === 'delete') {
    $item->status = 'delete';
    
    return response()->back()->with('message','Statut a ete refuser');
}
       }
   
}
