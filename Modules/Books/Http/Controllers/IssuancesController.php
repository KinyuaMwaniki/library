<?php

namespace Modules\Books\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Books\Entities\Book;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Books\Entities\Issuance;
use Modules\Settings\Entities\Setting;
use Modules\Students\Entities\Student;
use Illuminate\Support\Facades\Session;
use Modules\Books\Http\Requests\UpdateIssuanceRequest;

class IssuancesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $issuances = Issuance::orderBy('date_issued', 'DESC')->paginate(10);
        return view('books::issuances.index', compact('issuances'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $books = Book::all();
        $students = Student::all();
        $settings = Setting::select('policy', 'value')->get();
        return view('books::issuances.create', compact(['books', 'students', 'settings']));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $issuance = Issuance::find($id);
        
        if (empty($issuance)) {
            Session::flash('message', "Issuance Not Found");
            return redirect(route('issuances.index'));
        }

        return view('books::issuances.show', compact(['issuance'])); 
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $issuance = Issuance::find($id);
        $books = Book::pluck('title', 'id');
        $students = Student::get()->pluck('full_name', 'id');
        $users = User::select('name', 'id')->get();
        
        if (empty($issuance)) {
            Session::flash('message', "Issuance Not Found");
            return redirect(route('issuances.index'));
        }

        return view('books::issuances.edit', compact(['issuance', 'books', 'students', 'users'])); 
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateIssuanceRequest $request, $id)
    {
        info($request->all());

        $issuance = Issuance::find($id);
        
        if (empty($issuance)) {
            Session::flash('message', "Issuance Not Found");
            return redirect(route('issuances.index'));
        }

        $issuance->update([
            'book_id' => $request->book_id,
            'student_id' => $request->student_id,
            'date_issued' => $request->date_issued,
            'date_expected' => $request->date_expected,
            'date_returned' => $request->date_returned,
            'received_by_id' => $request->received_by_id,
        ]);

        Session::flash('message', "Issuance Updated");
        return redirect(route('issuances.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function issuancesOverdue()
    {
        $issuances = Issuance::whereNull('date_returned')->where('date_expected', '<', Carbon::today())->get();
        return view('books::issuances.overdue', compact('issuances'));
    }
}
