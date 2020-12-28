<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class APIPhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim = DB::table('phims')
                ->join('the_loais','phims.theloai_id','=','the_loais.id')
                ->join('trang_thais','phims.trangthai_id','=','trang_thais.id')
                ->join('dinh_dangs','phims.dinhdang_id','=','dinh_dangs.id')
                ->join('dao_diens','phims.daodien_id','=','dao_diens.id')
                ->select('phims.id','phims.Tenphim', 'phims.Hinhanh','the_loais.Tentheloai',
                 'phims.trangthai_id', 'phims.Diem')
                 ->orderBy('id')
                 ->limit(10)
                 ->get();
        return response()->json($phim,200,['Content-type'=>'application/json;charset=utf-8'],JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
