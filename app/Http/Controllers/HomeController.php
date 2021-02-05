<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Books\Entities\Book;
use Modules\Books\Entities\Issuance;
use Modules\Students\Entities\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $students = Student::all();
        $books = Book::all();
        $issuances = Issuance::whereNull('date_returned')->get();
        $overdue = Issuance::whereNull('date_returned')->where('date_expected', '<', Carbon::today())->get();
        return view('home', compact(['students', 'books', 'issuances', 'overdue']));
    }
}
