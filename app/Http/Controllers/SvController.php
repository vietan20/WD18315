<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SvController extends Controller
{
    public function showSV(){

     $sv = [
        [
            'id' => '1',
            'name' => 'Trần Việt An',
            'age' => '2001',
            'sex' => 'Nam',
            'phone' => '0968923516'
        ],
        [
            'id' => '2',
            'name' => 'Đinh Quang Trung',
            'age' => '2005',
            'sex' => 'Nữ',
            'phone' => '0968923516'
        ]
    ];
    return view('list-sinhvien',compact('sv'));
    }
    // public function getSV($id,$name,$age,$phone=''){
    //     echo $id,$name,$age,$phone;
    // }
    // public function updateProduct(Request $request){
    //     echo $request -> id;
    //     echo $request -> name;
    // }

}
