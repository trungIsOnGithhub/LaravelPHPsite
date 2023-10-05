<?php

namespace App\Http\Controllers;

use App\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thoughts = Thought::latest()->paginate(6);

        return view('home', [
            'msg' => 'list',
            'thoughts' => $thoughts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        Thought::create($request->all());

        $thoughts = Thought::latest()->paginate(6);

        return view('home', [
            'msg' => 'created',
            'thoughts' => $thoughts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function show(Thought $thought)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function edit(Thought $thought)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thought $thought)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $thought->update($request->all());

        $thoughts = Thought::latest()->paginate(6);

        return view('home', [
            'msg' => 'updated',
            'thoughts' => $thoughts,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thought $thought)
    {
        $thought->delete();

        $thoughts = Thought::latest()->paginate(6);

        return view('home', [
            'msg' => 'destroyed',
            'thoughts' => $thoughts,
        ]);
    }
}
