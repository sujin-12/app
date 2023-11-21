<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests;
use Session;
use Carbon;
use App\Http\Controllers\employeeController;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;
class employeeController extends Controller
{
    public function employeeList() {
        $employee=Employee::get();
          return view('employee/employeeList')->with('employee',$employee);
      }

      public function addEmployee() {
        $employee=Employee::get();
          return view('employee/addEmployee')->with('employee',$employee);
      }
      public function submitEmployee(Request $request)
      {

            $input=$request->all();
    
             $validator = Validator::make($request->all(), [
                
                          // 'EmployeeName' => 'required',
                                      ]);
    
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
    
                  }
                 else{
                    $Name=$input['name'];
                   $Gmail=$input['gmail'];
                    $Contact=$input['phone'];
                     $DOB=$input['dob'];
                     $DOJ=$input['doj'];
                // model name
                      Employee::insertGetId([
                        'name'=>$Name,
                         'gmail'=>$Gmail,
                           'phone'=>$Contact,
                          'dob'=>$DOB,
                          'doj'=>$DOJ,
    
                     ]);
                         }
                  return redirect('/employeeList')->with('message','Success! Employee Added Successfully'); 
    
                      }
                      public function editEmployee($ID) {
                        $employee=Employee::where([['id',$ID]])->select('*')->first();
                          return view('employee/editEmployee')->with('employee',$employee);
                      }
}