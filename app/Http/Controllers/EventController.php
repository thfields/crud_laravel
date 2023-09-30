<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function eventos(){
        return view('events.eventos');
    }

    public function login(){
        return view('events.login');
    }

    public function register(){
        return view('events.register');
    }


    public function contact(){
        return view('contact');
    }


}