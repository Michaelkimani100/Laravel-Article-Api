<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coin;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coins=Coin::where('name','Bitcoin')->orderBy('year','ASC')->get();
        return response()->json($coins);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
            'name' => 'required',
            'year' => 'required',
            'price' => 'required'
        );
        $this->validate($request,$rules);
        $coin=Coin::create([
            'name' =>$request->input('name'),
            'year'=>$request->input('year'),
            'price'=>$request->input('price')
        ]);
        return response()->json($coin);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coin=Coin::findOrFail($id);
        return response()->json($coin);
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
        $rules=array(
            
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coin=Coin::findOrFail($id);
        $coin->delete();
    }
}
