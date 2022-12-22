<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    //

    public function getUser() {
        return 'Na get!';
    }

    // public function updateUser(Request $r,$id) {
    //     $data = $r -> all();
    //     $data['last_name'] = $id;
    //     $data['test'] = 'foo';
    //     return $r->only('address');
    // }

    // //with photo
    // public function updateUser(Request $r,$id) {
    //     $path = base_path('public');
    //     $filename = "danica.".$r ->file('photo')->getClientOriginalExtension();
    //     return $r->file('photo')->move($path,$filename);
    // }

    public function calculate(Request $request) {
        $number_1 = $request->number_1;
        $number_2=$request->number_2;
        $operation = $request->operation;
        switch ($operation) {
        case '+' :
        return $number_1 + $number_2;
        case '-' :
        return $number_1 - $number_2;
        case '/' :
        return $number_1 / $number_2;
        case '*' :
        return $number_1 * $number_2;
        }
    }

    public function getJobs($id) {
        return DB::table('jobs')
        ->where('id',$id)
        ->get();
    }

    public function getAllJobs() {
        return DB::table('jobs')
        ->get();
    }

    public function insertJobs(Request $request) {
    $data = $request->all();
    return DB::table('jobs')->insert($data);
    }

    public function updateJobs($id,Request $request) {
        return DB::table('jobs')
        ->where('id',$id)
        ->update([
            'name' => $request->name,
            'address'=>$request->address
            ]);
        }

        public function deleteJobs($id) {
            return DB::table('jobs')
            ->where('id',$id)
            ->delete();
            }
    

}
