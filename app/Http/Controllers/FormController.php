<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=DB::table('students')->get();
        return view('list',compact('students'));
    }

    public function create()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        //return $request->all();

        $validatedData = $request->validate([
            'name'=>['required'],
            'address'=>['required'],
            'enroll'=>['required', 'digits:9'],
            'aadhar'=>['required', 'digits:12'],        
            'date'=>['required'],
            'bg'=>['required', 'string', 'in:A+,A-,B+,B-,AB+,AB-,O+,O-'],
            'phone'=>['required', 'digits:10'],      
        ]);

        $students=DB::table('students')->insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'enroll'=>$request->enroll,
            'aadhar'=>$request->aadhar,
            'date'=>$request->date,
            'bg'=>$request->bg,
            'phone'=>$request->phone,
        ]);
        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
