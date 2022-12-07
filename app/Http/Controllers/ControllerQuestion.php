<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class ControllerQuestion extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('principal', ['questions' => $questions]);
    }
}
