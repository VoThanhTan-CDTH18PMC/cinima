<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ve;
use App\Http\Requests\FormPost;
use Session;
class VeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ve = Ve::paginate(1);
        return view("data.Trang_Ve.data_ve",['ve'=>$ve]);
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
        $ve = Ve::$request->validate([
            'dsve_id' => $request['dsve_id'],
            'ghe_id' => $request['ghe_id'],
            'phim_id' => $request['phim_id'],
            'Thanhtien' => $request['thanhtien'],
        ]);
        $ve = Ve::create($vali_ve);
        return redirect()->route('ve.index');
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
        $ve = Ve::find($id);
        return view("data.Trang_Ve.sua_ve",['ve'=>$ve]);
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
        $ve = DaoDien::find($id);
        $ve->dsve_id = $request['dsve_id'];
        $ve->ghe_id = $request['ghe_id'];
        $ve->phim_id = $request['phim_id'];
        $ve->Thanhtien = $request['thanhtien'];
        $ve->save(); 
        return redirect()->route('ve.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ve = ve::find($id);
        $ve->delete();
        return redirect('ve');
    }
}
