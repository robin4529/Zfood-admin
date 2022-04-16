<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_data =Staff::latest()->paginate(2);
        return view('admin.staff.index',[
            "Staff_data" =>$staff_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // validition in this page
       $this->validate($request,[
        'photo' =>'required',
        'facebook' =>'required',
        'Instagram' =>'required',
        'twitter' =>'required',
        'linkdein' =>'required',
        ]);
            if($request->hasfile('photo')){
                    $img =$request->file('photo');
                    $file_name = md5(time() . rand()) .'.'. $img->clientExtension();
                    $img->move(storage_path('app/public/staff'), $file_name);
            }else{
                $file_name='';
            }
            Staff::create([
                'photo' =>$file_name,
                'name' =>$request->name, 
                'facebook' =>$request->facebook, 
                'Instagram' =>$request->Instagram, 
                'twitter' =>$request->twitter, 
                'linkdein' =>$request->linkdein, 
                
            ]);


        return redirect()->route('staff.create')-> with('success','Staff addedd Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data =Staff::find($id);
        return view('admin.staff.show',[
            "singel_data" => $data
           
        ]);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Staff::find($id);
        return view('admin.staff.edit',[
            "edit_data" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $edit_id =Staff::find($id);
        $edit_id->name = $request->name ;
        $edit_id->facebook = $request->facebook ;
        $edit_id->Instagram = $request->Instagram ;
        $edit_id->twitter = $request->twitter ;
        $edit_id->linkdein = $request->linkdein ;

        $edit_id->update();

        return redirect()->route('staff.index');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_id =Staff::find($id);
        $delete_id->delete();

       return redirect()->route('staff.index');
    }
    // get method delet for resource Controller

    public function staffdelete($id)
    {
         $delete_id=Staff::find($id);
         $delete_id->delete();
         

         return redirect()->route('staff.index');
    }

}
