<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\usersregis;
use DB;
use Session;
class usercontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function usersaved(Request $request)
	{
		$image=new usersregis;
		$image->name=$request->name;
		$image->pwd=$request->pwd;
		$image->email=$request->email;
		
		$image->save();
		$ctr=2;
        return view('fileuploadform',compact('ctr'));
	}   
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 public function login_check(Request $request)
	 {
	
		 
		 $var=DB::table('usersregis')->where('name','=',$request->username)->first();
		 if ($var==NULL)
		 {   $ctr=2;
			 return view('fileuploadform',compact('ctr'));
		 }
		
		 else
		 {
			 if(($var->pwd)==($request->password))
			 {
				 $ctr=1;
		        Session::put('var',$var);
				
		 
	           	return view('fileuploadform',compact('var','ctr'));
			 }
			 else{
		     $ctr=2;
			 
			 return view('fileuploadform',compact('ctr'));
				  
				
			 }
		 }
		 
		 
		 
	 }
	 public function login_out(Request $request)
	 {
		 Session::forget('var');
		 $ctr=2;
		 return view('fileuploadform',compact('ctr'));
	 }
		 
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$art=usersregis::all();
		return view('display5',compact('art'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
