<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function login(Request $request){
        echo "Request method is: ".($request)->method();
        echo "<br>";
        echo "Path used is: ".($request)->path();
        echo "<br>";
        echo "Path url is: ".($request)->url();
        echo "<br>";
        echo "Host is: ".($request)->host();
        echo "<br>";
        echo "IP address is: ".($request)->ip();
        echo "<br>";
        echo "User name is: ".($request)->input('name');
        echo "<br>";
        echo "User password is: ".($request)->method('password');
        echo "<br>";
        print_r ($request->input());
        echo "<br>";
        print_r ($request->collect());
        echo "<br>";
    }

    function queries(){
        $result = DB::table('users')->get(); #will print all entries of the table
        // $result = DB::table('users')->where('phone','03017891132')->get(); # getting data according to phone number
        // $result = DB::table('users')->where('name','sajid')->get(); # getting data according to phone
#to insert new data
        // $result = DB::table('users')->insert([  
        //     'name'=>'zaqir',
        //     'email'=>'zaqir@gmail.com',
        //     'phone'=>'03006454838',
        // ]);
        // if ($result){
        //     return "data inserted success";
        // }else{
        //     return "data not inserted";
        // }


#update data
        // $result = DB::table('users')->where('name','ramzan')->update(['phone'=>'03136468453']);
        // if ($result){
        //     return "data updated success";
        // }else{
        //     return "data not updated";
        // }
#to delete data
        // $result = DB::table('users')->where('name','zaqir')->delete();
        // if ($result){
        //     return "data deleted success";
        // }else{
        //     return "data not deleted";
        // }
        return view('users',['users'=>$result]); #main function rerutn
    }
}
