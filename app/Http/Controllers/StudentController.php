<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =Student::all();
        return view('admin.student.index',[
            'all_data' =>$data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // data store
        $this->validate($request,[
               'name' =>'required',
               'email' =>'required',
               'cell' =>'required',
               'age' =>'required',
               'locaton' =>'required',
               'photo' =>'required',
                   
            ]);
                if($request->hasfile('photo')){
                    $img = $request->file('photo');
                    $file_name = md5(time().rand()) .'.'.$img->clientExtension();
                    $img->move(storage_path('app/public/student'), $file_name);


                }else{
                    $file_name='';
                }
            Student::create([
                'name' => $request->name,
                'email' => $request->email,
                'cell' => $request->cell,
                'age' => $request->age,
                'locaton' => $request->locaton,
                
                'photo' =>$file_name,
            ]);
            return redirect()->route('student.create')-> with('success','Student addedd Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
