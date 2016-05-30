<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use DB;


use App\Http\Requests;

class SportsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // } 
    
    public function index()
    {
      $sports = Sport::all();

      return view('sports.index', compact('sports'));
    }

    public function show(Sport $sport)
    {
     
      $sport->load('games.user');
     

      return view('sports.show', compact('sport'));
 
    }

     public function about()
    {
        return view('about');
    }
     public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
      return view('privacy');
    }
}
