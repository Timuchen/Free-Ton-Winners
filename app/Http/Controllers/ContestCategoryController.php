<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contest;
use App\ContestCategory;

class ContestCategoryController extends Controller
{
    public function index($id)
    {

        $category = ContestCategory::where('id', '=', $id)->firstOrFail();
        $contests = $category->contests()->orderBy('created_at', 'ASC')->paginate(12);
        $categories = ContestCategory::all()->sortBy('name');

        return view('contests.category.index', compact('contests', 'category', 'categories'));
    }
}
