<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students=Students::paginate(3);
        return view('info',compact('students'));
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
            'email'=>'required',
            'phonenumber'=>'required'
        ]);

    $student = new Students;
    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phonenumber;

    $student->save();

        return redirect(url("/"))->with('successMsg', 'Student Successfully Added');
    }

    public function edit($id){
        $student = Students::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $req, $id){
        $this->validate($req,[
            'name'=>'required',
            'email'=>'required',
            'phonenumber'=>'required'
        ]);

        $student =  Students::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phonenumber;
        $student->save();

        return redirect(route('home'))->with('successMsg', 'Student Successfully Updated');
    }

    public function delete($id){
        Students::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Student Delete Successfully');
    }
}

