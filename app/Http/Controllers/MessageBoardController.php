<?php

namespace App\Http\Controllers;

use App\Messageboard;
use Illuminate\Http\Request;

class MessageBoardController extends Controller
{

    public function index()
    {

        $messages = Messageboard::paginate(6);

        return view('index',[
            'messages'=> $messages ,
        ]);
    }



    public function create()
    {

        return view('create');
    }

    public function save(Request $request)
    {
        $data = $request->input('Messageboard');

        $message = new Messageboard();
        $message->name = $data['name'];
        $message->sex = $data['sex'];
        $message->school = $data['school'];
        $message->phonenum = $data['phonenum'];
        $message->message = $data['message'];

        if ($message->save()) {
            return redirect('/');
        } else {
            return redirect()->back();
        }

    }
};