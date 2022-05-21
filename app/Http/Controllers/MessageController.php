<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
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
        return redirect()->back();
    }


    public function
    project($id = null){
        $project = Project::findOrFail($id);
        return view('project', [
            'project' => $project,
        ]);
    }
}
