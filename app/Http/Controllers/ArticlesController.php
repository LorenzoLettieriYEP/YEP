<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Articles::all();
        return view ("articles.allArticles", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view ("articles.addArticle");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        Auth::user()->Articles()->create([
            "title" => $request->input("title"),
            "subtitle" => $request->input("subtitle"),
            "description" => $request->input("description"),
            "img"=> $request->file("img")->store("public/img"),
            "category_id"=> $request->input("categories")
        ]);

        return redirect("/")->with("message","L'articolo è stato caricato!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $articles): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $articles): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articles $articles): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles): RedirectResponse
    {
        //
    }
}
