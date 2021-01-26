<?php

namespace Modules\Students\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Students\Entities\Student;
use Illuminate\Support\Facades\Session;
use Modules\Students\Http\Requests\CreateStudentRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students::students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('students::students.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateStudentRequest $request)
    {
        $student = Student::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'student_number' => $request->student_number,
        ]);

        Session::flash('message', "Student Saved");
        return redirect(route('students.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('students::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        
        if (empty($student)) {
            Session::flash('message', "Student Not Found");
            return redirect(route('students.index'));
        }

        return view('students::students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        
        if (empty($student)) {
            Session::flash('message', "Student Not Found");
            return redirect(route('students.index'));
        }

        $student->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'student_number' => $request->student_number,
        ]);

        Session::flash('message', "Student Updated");
        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        
        if (empty($student)) {
            Session::flash('message', "Student Not Found");
            return redirect(route('students.index'));
        }

        $student->delete();
        Session::flash('message', "Student Deleted");
        return redirect(route('students.index'));  
    }
}
