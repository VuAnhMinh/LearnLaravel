<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HTTP\Requests;

class MyController extends Controller
{
    public function Xinchao()
    {
    	echo "Chao cac ban";
    }

    public function KhoaHoc($ten)
    {
    	echo "Khoa hoc : ".$ten;
    	return redirect()->route('MyRoute3');
    }

    public function GetData(Request $request)
    {
    	//echo $request->url();
    	if($request->is('My*'))
    		echo "Có My";
    	else 
    		echo "Không có My";
    }
}


