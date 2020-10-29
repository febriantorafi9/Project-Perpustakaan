<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class koleksibukuController extends Controller
{
    public function index(Request $request){
        
        if($request -> has('cari')){
            $buku = Buku::where('judul_buku','LIKE','%'.$request->cari.'%')->get();
        }else{
            $buku = Buku::all();
        }
        
        $data = array(
            'menu' => 'history',
            'submenu' => 'koleksibuku'
        );

        return view('/history/koleksibuku',['buku' => $buku],$data);
    }
}
