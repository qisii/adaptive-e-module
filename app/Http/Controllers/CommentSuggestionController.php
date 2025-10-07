<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentSuggestionController extends Controller
{
    //

    public function index(){
        return view('users.comments-suggestions.index');
    }
}
