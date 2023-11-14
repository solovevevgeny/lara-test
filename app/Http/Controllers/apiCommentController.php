<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class apiCommentController extends Controller
{
    public function create(Request $request )
    {

        $validated = $request->validate([
            'article_id' => 'required',
            'subject'    => 'required|max:255',
            'body'       => 'required'
        ]);

        // dd($validated);

        if (Comment::create($validated)) 
        {
            return response('OK', 200);
        }
        else {
            return response('ValidationException');
        }


    }
}
