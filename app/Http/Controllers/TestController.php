<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $students = Student::with('budget')
            ->with('budget.payments', function($query){
                $query->whereMonth('created_at', date('m'));
            })
            ->get();
        // return $students;
        return view('welcome', compact('students'));

    }

    public function test()
    {
        $test = Budget::with('payments')->get();
        return $test;
    }
}
