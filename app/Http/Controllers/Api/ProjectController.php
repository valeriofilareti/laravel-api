<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::with('category')->get();
        return response()->json($projects);
    }
    // public function getCategories(){
    //     $categories = Category::all();

    //     return response()->json($categories);
    // }
}
