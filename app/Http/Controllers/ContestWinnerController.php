<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContestCategory;
use App\Contest;
use App\ContestWinner;

class ContestWinnerController extends Controller
{
    public function index($id)
    {
        $category = ContestCategory::where('id', '=', $id)->firstOrFail();
        $contests = $category->contests()->orderBy('created_at', 'ASC')->paginate(12);
        $categories = ContestCategory::all()->sortBy('name');
        $winners = ContestWinner::where('contest_id', '=', $id);

        return view('contests.winners.create', compact('contests', 'category', 'categories', 'winners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contest_id'=>'required',
            'title' => 'required',
        ]);

        if ($request->hasFile('image')){
            $datePrefix = new DateTime();
            $datePrefix = $datePrefix->format('y/m/d/');

            $file = $request->file('image');
            $upload_folder = '/storage/winners/' . $datePrefix;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().$upload_folder, $fileName);
        }

        $winner = new Price([
            'title' => $request->get('title'),
            'ranking' => $request->get('ranking'),
            'description' => $request->get('description'),
            'total_points' => $request->get('total_points'),
            'avg_points' => $request->get('avg_points'),
            'jurors_voted' => $request->get('jurors_voted'),
            'jury_comment' => $request->get('jury_comment'),
            'accepted' => $request->get('accepted'),
            'abstained' => $request->get('abstained'),

            'rejected' => $request->get('rejected'),
            'image' => $request->get('image'),
            'file' => $request->get('file'),
            'link' => $request->get('link'),
            'winner_name' => $request->get('winner_name'),
            'source' => $request->get('source'),
            'author_id' => 1,

            'contest_id' => $request->get('contest_id'),
        ]);

        $winner->save();
        $contestId = $request->get('contest_id');
        return redirect('/contests/' . $contestId . '/winners/')->with('success', 'ShopMonitoring updated!');
    }

    public function create()
    {
        $winners = ContestWinner::all();
        return view('contests.winners.create', ['winners' => $winners]);
    }
}
