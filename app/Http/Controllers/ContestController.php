<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;
use App\ContestCategory;

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

    public function show($id)
    {
        $contest = Contest::find($id);
        $contestCatId = $contest->first()->contest_category_id;
        $category = ContestCategory::where('id', '=', $contestCatId)->firstOrFail();
        return view('contests.show', compact('contest', 'category'));
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
