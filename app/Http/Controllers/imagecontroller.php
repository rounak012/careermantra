<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\image;
use App\usersregis;
use Input;
use DB;
class imagecontroller extends Controller {

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
	public function create(Request $request)
	{
		$input = Input::all();
		
		$file = array_get($input,'myFile');
           // SET UPLOAD PATH
            $destinationPath = 'uploads';
            // GET THE FILE EXTENSION
         $extension = $file->getClientOriginalExtension();
            // RENAME THE UPLOAD WITH RANDOM NUMBER
           $fileName = rand(11111, 99999) . '.' . $extension;
            // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
            $upload_success = $file->move($destinationPath, $fileName);
		$image=new image;
		
		$image->title=$request->title;
		$image->description=$request->description;
		$image->filePath=$fileName;
		$image->userid=$request->id;
		
		$image->save();
		$id=$request->id;
		
		$var=DB::table('images')->where('userid','=',$id)->get();
		
        return view('display1',compact('var'));
				
        // IF UPLOAD IS SUCCESSFUL SEND SUCCESS MESSAGE OTHERWISE SEND ERROR MESSAGE
        if ($upload_success) {
            //return $fileName;

		
	}
	}
	

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function form()
	{
		$ctr=2;
		return view('fileuploadform',compact('ctr'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$art=image::all(); //Product::find(Input::get('id'))  //Group::where('name', '=', $groupName);
		
		return view('displa3',compact('art'));
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request,$id)
	{
		$input=Input::all();
		$file=array_get($input,'file');
		// SET UPLOAD PATH
                 $destinationPath = 'uploads';
                // GET THE FILE EXTENSION
		if(isset($file))
               { $extension = $file->getClientOriginalExtension();
               // RENAME THE UPLOAD WITH RANDOM NUMBER
                $fileName = rand(11111, 99999) . '.' . $extension;
                 // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
                $file->move($destinationPath, $fileName); 
		}
		if(isset($request->title))
		DB::table('images')->where('id',$id)->update(['title' => $request->title]);
		if(isset($request->description))
		DB::table('images')->where('id',$id)->update(['description' => $request->content]);
		if(isset($file))
		DB::table('images')->where('id',$id)->update(['filePath' => $fileName]);
		
                return redirect()->route('show1');
	}

	public function edit1(Request $request)
	{    $id=$request->id;
		$input=Input::all();
		
		$file=array_get($input,'file');
		// SET UPLOAD PATH
                 $destinationPath = 'uploads';
                // GET THE FILE EXTENSION
		if(isset($file))
               { $extension = $file->getClientOriginalExtension();
               // RENAME THE UPLOAD WITH RANDOM NUMBER
                $fileName = rand(11111, 99999) . '.' . $extension;
                 // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
                $file->move($destinationPath, $fileName); 
		}
		if($request->title!=null)
		DB::table('images')->where('id',$id)->update(['title' => $request->title]);
		if($request->description!=null)
		DB::table('images')->where('id',$id)->update(['description' => $request->content]);
		if(isset($file))
		DB::table('images')->where('id',$id)->update(['filePath' => $fileName]);
		
                return redirect()->route('show');
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$blog=image::find($id);
		return view('update',compact('blog'));
	}
    public function update1()
	{
		$var=Session('var');
		
		$blog=DB::table('images')->where('userid','=',$var->userid)->get();
		
		return view('update1',compact('blog'));
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		$id=$request->id;
		DB::table('images')->where('id','=',$id)->delete();
                return redirect()->route('show');
	}
	public function destroy1()
	{      $var=Session('var');  // Session.get('var');
	      $blog=DB::table('images')->where('userid','=',$var->userid)->get();
		   
		//$blog=image::all();
		return view('destroy1',compact('blog'));
	}
	
	public function selectone()
	{   $var=Session('var');
		$blog1=image::all();
		$blog=DB::table('images')->where('userid','=',$var->userid)->get();
		return view('select',compact('blog'));
	}
	public function selectonlyone(Request $request)
	{
		$id=$request->id;
		$var=DB::table('images')->where('id','=',$id)->first();    
    		//$art=image::find($id); //primary key id h islye
                return view('display2',compact('var'));
	}
	
		
}
	


