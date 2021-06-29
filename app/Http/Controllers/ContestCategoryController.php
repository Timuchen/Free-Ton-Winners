<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contest;
use App\ContestCategory;

class ContestCategoryController extends Controller
{
    public function index($id)
    {
        $category = ContestCategory::find($id);
        $contests = $category->contests;
    }
}
