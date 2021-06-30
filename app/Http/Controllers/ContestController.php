<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;
use App\ContestCategory;
use App\ContestWinner;

class ContestController extends Controller
{
    public function index()
    {
        $contests = Contest::all()->sortBy('title');
        $categories = ContestCategory::all()->sortBy('name');
        //$category = CategoryContest::with('contests')->get();
        // $contestId = $contests->contest_category_id;
        // $category = ContestCategory::where('id', '=', $contestId)->firstOrFail();

        return view('contests.index', compact('contests', 'categories'));
    }

    public function create()
    {
        return view('contests.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            ]);
        $contest = new Contest();
        $contest->title = $request->title;
        $contest->description = $request->description;

        $contest->submission_start = $request->submission_start;
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
            $upload_folder = '/storage/contests/' . $datePrefix;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().$upload_folder, $fileName);
        }
        $contest->author_id = 1;

        $contest->contest_category_id = $request->contest_category_id;

        $contest->save();
        $contestId = $contest->id;
        return redirect('/contests/' . $contestId . '/winners/')->with('success','Contest created successfully!');
    }

    public function show($id)
    {
        $contest = Contest::find($id);
        $contestCatId = $contest->first()->contest_category_id;
        $category = ContestCategory::where('id', '=', $contestCatId)->firstOrFail();

        $winners = ContestWinner::where('contest_id', '=', $id)->get();
        
        return view('contests.show', compact('contest', 'category', 'winners'));
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
