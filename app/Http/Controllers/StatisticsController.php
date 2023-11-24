<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    // ! Sadly, I couldn't figure-out the appropiate query to retrieve all the data "in a single swoop", that's why I left it this way
    /**
     * Retrieve a listing of all statistics: "Most Read Books", "Least Read Books", "Most Popular Author".
     */
    public function getStatistics(Request $request)
    {
        $mostRead =  Book::with('users')->get();

        return response()->json(['most_read' => $mostRead], 200);
    }
}
