<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        $lastArticles = Articles::orderBy("created_at", "DESC")->take(3)->get();
        return view ("welcome", compact("lastArticles"));
    }
}
