<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserManagement;

class UsermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $title='User Management';
        $users=UserManagement::orderBy('id','DESC')->paginate(5);
        return view('user.list',compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='User Management';
        return view('user.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'phonenumber'=>'required',
            'address'=>'required',
            'zipcode'=>'required'
        ]);
        UserManagement::create($request->except('_token'));
        return redirect()->route('usermanage.create')->with('success','User added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title='User Management';
        $user=UserManagement::find($id);
        return view('user.manage',compact('user','title'));
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
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'phonenumber'=>'required',
            'address'=>'required',
            'zipcode'=>'required'
        ]);
        UserManagement::find($id)->update($request->all());
        return redirect()->route('usermanage.show',$id)->with('success','User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserManagement::find($id)->delete();
        return redirect()->route('usermanage.index');
    }
    
}
