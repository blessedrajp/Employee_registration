<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\multioptions;
use App\Models\Userdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Registrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $cand_details=Userdetails::all();

        $optionshow= multioptions::where('status','=','active')->get();
        return view('Admin.Registration.index',compact('optionshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validation
        // $request->validate([
        //     'firstname'=>'required|min:5',
        //     'lastname'=>'required|min:5',
        //     'email'=>'required|email',
        //     'password'=>'required|min:6',
        //     'gender'=>'required',
        //     'dob'=>'required',
        //     'number'=>'required',
        //     'country'=>'required',
        //     'city'=>'required',
        //     'address'=>'required',
        //     'resume'=>'required',
        //     'skills'=>'required',
        //     'photo'=>'required',
        //     'coverletter'=>'required',
        //     'terms'=>'required',
        // ]);

        $input=$request->except('_token','conform_password');

        // echo "<pre>";print_r($data);exit;

        // photo path 
        $imagepath="uploads/resumes/candidates";
        if($request->hasFile('resume')){
            $uploadedimage=$request->file('resume');
            $newfilename=time().'.'.$uploadedimage->getClientOriginalExtension();
            $uploadedimage->move($imagepath,$newfilename);
            $input['resume']=$imagepath.'/'.$newfilename;
        }

        // photo path 
        $imagepath="uploads/images/candidates";
        if($request->hasFile('photo')){
            $uploadedimage=$request->file('photo');
            $newfilename=time().'.'.$uploadedimage->getClientOriginalExtension();
            $uploadedimage->move($imagepath,$newfilename);
            $input['photo']=$imagepath.'/'.$newfilename;
        }

        

        // Userdetails::create($data);
        $user=new Userdetails;
        $user->firstname=ucfirst($input['firstname']);
        $user->lastname=ucfirst($input['lastname']);
        $user->email=$input['email'];
        $user->altemail=$input['altemail'];
        $user->password=$input['password'];
        $user->gender=$input['gender'];
        $user->dob=$input['dob'];
        $user->number=$input['number'];
        $user->altnumber=$input['altnumber'];
        $user->country=$input['country'];
        $user->city=$input['city'];
        $user->address=$input['address'];
        $user->resume=$input['resume'];
        $user->skills=implode(',',$input['skills']);
        $user->photo=$input['photo'];
        $user->coverletter=$input['coverletter'];
        $user->terms=$input['terms'];
        $user->save();

        // $user->lastname=ucfirst($input['lastname']);



        return redirect()->route('candidate-details-show');
        

    }
    public function canidateshow()
    {
        $Userdata= Userdetails::all();



                // $alldata = DB::table('userdetails')
                // ->leftJoin('multioptions', function ($join) {
                //     $join->on(DB::raw('FIND_IN_SET(multioptions.id, userdetails.skills)'), '>', DB::raw('0'));
                // })
                // ->select('userdetails.firstname as firstname',
                //     'userdetails.lastname as lastname',
                //     'userdetails.gender as gender',
                //     'userdetails.email as email',
                //     'userdetails.number as number',
                //     DB::raw('multioptions.id as skill_id'),
                //     DB::raw('multioptions.skill as skills'),
                //     'userdetails.photo as photo')
                //     ->where('userdetails.deleted_at', '0')
                //     ->orderBy('userdetails.id', 'desc')->get();

      
        $alldata = DB::table('userdetails')
            ->leftJoin('multioptions', 'userdetails.skills', 'like', DB::raw("CONCAT('%', multioptions.id, '%')"))
            ->select('userdetails.id as userid', 'userdetails.firstname as firstname',
                'userdetails.lastname as lastname',
                'userdetails.gender as gender',
                'userdetails.email as email',
                'userdetails.number as number',
                // 'multioptions.id as skill_id',
                // 'multioptions.skill as skills',
                'userdetails.photo as photo')
            ->selectRaw("GROUP_CONCAT(multioptions.skill) as skills")
            ->where('userdetails.deleted_at', '0')
            ->groupBy('userdetails.id', 'userdetails.firstname','userdetails.lastname','userdetails.gender','userdetails.email','userdetails.number', 'userdetails.photo')
            ->get();
        // echo "<pre>";print_r($allgategories);echo "</pre>";exit;

        // return view('leftjoin', compact('allgategories'));


                    // echo "<pre>";print_r($alldata);exit;
        
        return view('Admin.Registration.candidateshow' ,compact('alldata'));
    }

    
    public function multioptionshow()
    {
        $multioptions= multioptions::all();
        return view('Admin.Registration.multioptionshow' ,compact('multioptions'));
    }

    public function multioptionadd()
    {
        return view('Admin.Registration.muloption-add');
    }

    public function multioptionstore(Request $request)
    {

        $request->validate([
            'skill'=>'required',
            'image'=>'required',
            'status'=>'required',
        ]);
        $input=$request->all();
        // echo "<pre>";print_r($input);exit;


        $imagepath="uploads/images/skillimage";
        if($request->hasFile('image')){
            $uploadedimage=$request->file('image');
            $newfilename=time().'.'.$uploadedimage->getClientOriginalExtension();
            $uploadedimage->move($imagepath,$newfilename);
            $input['image']=$imagepath.'/'.$newfilename;
        }

        $multioptions= new multioptions;

        $multioptions->skill=json_encode($input['skill']);
        // $faq->image = json_encode($imagedata);
        $multioptions->image=$input['image'];
        $multioptions->status=$input['status'];
        $multioptions->save();

        return redirect()->route('show-mul-option')->with('message','skill option added sucessfully');



    }

    public function multioptionstatus(Request $request){

        try {
            
            $input=$request->all();
            $id=$input['id'];
            $oldstatus=$input['oldstatus'];
            $multioption=multioptions::find($id);
            if(!$multioption){
                return response()->json(["message"=>"option not found"]);
            }
            $multioption->status=($oldstatus == 'active') ? 'inactive' :'active';
            $multioption->update();
            return response()->json(["message"=> 'success' ,'status'=>$multioption->status == 'active'? 1 : 2]);
            

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message"=>'failed']);
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
