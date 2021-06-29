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
            'submission_start' => 'required',
            'submission_end' => 'required',
            'judging_start' => 'required',
            'judging_end' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        $contest = new Contest();
        $contest->title = $request->title;
        $contest->description = $request->description;
        $contest->submission_end = $request->submission_end;
        $contest->judging_start = $request->judging_start;
        $contest->judging_end = $request->judging_end;
        $contest->balance = $request->balance;
        $contest->to_disquse = $request->to_disquse;
        $contest->total_votes = $request->total_votes;
        $contest->avg_score = $request->avg_score;

        if ($request->hasFile('image')){
            $datePrefix = new DateTime();
            $datePrefix = $datePrefix->format('y/m/d/');
            $file = $request->file('image');
            $upload_folder = '/public/uploads/' . $datePrefix;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().$upload_folder, $fileName);
        }
        
        $contest->avg_score = $request->avg_score;

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
