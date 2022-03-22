<?php

namespace App\Http\Controllers;

use App\Message;
use App\Project;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'email' => ['required', 'email', 'max:250'],
            'phone' => ['nullable','string', 'max:250'],
            'subject' => ['required', 'string', 'max:500'],
            'message' => ['required', 'string'],
        ]);

        Message::create($data);
        return redirect()->back()->withSuccess('ok');
    }


    public function project($id = null){
        $project = Project::find($id);
        return view('project', [
            'project' => $project,
        ]);
    }
}
