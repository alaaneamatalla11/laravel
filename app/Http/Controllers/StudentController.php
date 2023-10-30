<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view ('students.index', compact('students'));
        //compact = ['students' => $students];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        // $student = $request->all();

        // Retrieve the validated input data...
        // $student = $request->validated();

        // Retrieve a portion of the validated input data...
        //$student = $request->safe()->only(['name', 'city']);
        //$student = $request->safe()->except(['name', 'city']);
        dd($request->all());
        Student::create($request->all());
    
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view ('students.edit', ['students'=>$student]);
        // return view ('students.edit',compact('students'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request,Student $student)
    {
        $student->update($request->validated());
        return redirect()->route ('students.index');

         // $student->update([
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'city'=>$request->city,
        //     'address' => $request->address,
        // ]);
        //= 
        //array of all rules on Request
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
        // $students= Student::findorFail($id)->delete();

        }
}
