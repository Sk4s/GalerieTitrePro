<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{    
    public function home() {
        return view('welcome');
    }

    public function EspaceAvatar() {
    	return view('espace-avatar');
    }

    public function ToDoList() {
    	return view('to-do-list');
    }

    public function Gallery() {
    	return view('gallery');
    }

    public function SocialNetwork() {
    	return view('social-network');
    }

    public function vueChat() {
    	return view('vue-chat');
    }

    public function Milolib() {
    	return view('milolib');
    }
}