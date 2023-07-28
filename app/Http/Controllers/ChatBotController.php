<?php

namespace App\Http\Controllers;

use App\Models\MenuChatBot;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
  public function index(){
    return view('admin.chatbot.index');
  }

  public function store(Request $request){
    $menu = new MenuChatBot();

    dd($request->all());

  }
}
