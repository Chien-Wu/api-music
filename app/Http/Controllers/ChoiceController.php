<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display two random choice sets.
     *
     * @return \Illuminate\View\View
     */
    public function showChoiceSet()
    {
        // Retrieve two random choice records from the database
        $choices = Choice::inRandomOrder()->take(2)->get();

        // Return a view named 'choice-set' and pass the choices data to it
        return response()->json($choices);
    }
}