<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\commentaire;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $data['client_id'] = Auth::user()->client->id;
        
        commentaire::create($data);
        return redirect()->back()->with('success' ,'comment added with success');

    }

    /**
     * Display the specified resource.
     */
    public function show(commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, commentaire $commentaire)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commentaire $comment)
    {
       $comment->delete();
        return redirect()->back()->with('success', 'comment deleted with success');
    }
}
