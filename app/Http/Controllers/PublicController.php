<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function welcome(){
        $lastArticles = Articles::orderBy("created_at", "DESC")->take(3)->get();
        return view ("welcome", compact("lastArticles"));
    }

    public function careerMenu(){
        return view ("career");
    }

    public function writerRequest(){
        Auth::user()->applyRequest("writer");
        return redirect()->to(route("welcome"))->with("message", "Richesta mandata con successo!");
    }
    public function revisorRequest(){
        Auth::user()->applyRequest("revisor");
        return redirect()->to(route("welcome"))->with("message", "Richesta mandata con successo!");
    }
    public function adminRequest(){
        Auth::user()->applyRequest("admin");
        return redirect()->to(route("welcome"))->with("message", "Richesta mandata con successo!");
    }

    public function adminZone(){
        $writerReq = User::where("is_writer", NULL)->get();
        $revisorReq = User::where("is_revisor", NULL)->get();
        $adminReq = User::where("is_admin", NULL)->get();

        return view("admin.admin-zone", compact("writerReq","revisorReq","adminReq"));
    }


    public function setWriter(User $request){
        // $user->is_writer = true;
        // $user->update();

        $request->update([
            "is_writer" => true,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }
    public function denyWriter(User $request){
        // $user->is_writer = false;
        // $user->update();

        $request->update([
            "is_writer" => false,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }

    public function setRevisor(User $request){
        // $request->is_revisor = true;
        // $request->update();

        $request->update([
            "is_revisor" => true,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }
    public function denyRevisor(User $request){
        // $user->is_revisor = false;
        // $user->update();

        $request->update([
            "is_revisor" => false,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }

    public function setAdmin(User $request){
        // $user->is_admin = true;
        // $user->update();

        $request->update([
            "is_admin" => true,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }
    public function denyAdmin(User $request){
        // $user->is_admin = false;
        // $user->update();

        $request->update([
            "is_admin" => false,
        ]);

        return redirect()->back()->with("message", "L'utente è stato reso Scrittore!!!");
    }
}
