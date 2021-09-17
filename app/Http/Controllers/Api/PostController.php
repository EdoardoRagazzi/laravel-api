<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    
    public function index(){
// Call Json from the database
        $posts = Post::all();
        return response()->json([
            'success' => 'true',
            'results' => $posts
        ])
    }
}