<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    //
    public function store(Request $request){
        $validated = $request->validate([
            'Nosaukums'=> 'required|max:255',
            'Paskaidrojums' => 'required',
            'Banera_adrese' => 'required|max:255',
            'Cilveku_skaits' => 'required|integer',
            ]);
            Course::create($validated);
    }

    public function index(){
        return response()->json(Course::all());
    }
}
