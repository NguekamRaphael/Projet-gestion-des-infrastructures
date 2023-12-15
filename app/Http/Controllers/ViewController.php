<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function post_infrastructure()
    {
return view('post_infrastructure');
    }

    public function add_reservation()
    {
        return view('add_reservation');
    }

    public function connect(Request $request)
    {
      $data = [
        'messages'=>'Connected'
      ];
        return viewt('/add_reservation');
      }
        
    }

