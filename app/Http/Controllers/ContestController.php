<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;

class ContestController extends Controller
{
    public function index()
    {
        $contests = Contest::all();
        return view('contests.index', compact('contests'));
    }

    public function create()
    {
        return view('contests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $contest = new Contest();
        $contest->title = $request->title;
        $contest->body = $request->body;
        $contest->published_at = $request->published_at;

        $contest->save();
        return redirect('/home')->with('success','Contest created successfully!');
    }

    public function show(Contest $contest)
    {
        return view('contests.show', compact('contest'));
    }

    public function edit(Contest $contest)
    {
        return view('contests.edit', compact('contest'));
    }

    public function update(Contest $contest, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $contest->title = $request->title;
        $contest->body = $request->body;
        $contest->published_at = $request->published_at;

        $contest->save();
        return redirect('/home')->with('success','Contest updated successfully!');
    }

    public function destroy(Contest $contest)
    {
        $contest->delete();
        return redirect('/home')->with('success','Contest deleted successfully!');
    }
}
