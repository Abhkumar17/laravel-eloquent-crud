<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Sumit;
use Illuminate\Http\Request;

class SumitController extends Controller
{
    public function index()
    {
        $sumits = Sumit::simplePaginate(5);
        return view('index',['sumits'=>$sumits]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //Using quireBuilder

        /*DB::table('sumits')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);*/

         // Using Eloquent ORM

        $sumits = new Sumit;
        $sumits->name = $request->name;
        $sumits->email = $request->email;
        $sumits->phone = $request->phone;
        $sumits->save();

        return redirect()->route('sumit.create')->with('status','Record has been inserted successfully');
    }

    public function edit($id)
    {
        //Using quireBuilder

        /*$sumit = DB::table('sumits')->find($id);
        return view('edit',['sumit'=>$sumit]);*/

        // Using Eloquent ORM

        $sumit = Sumit::find($id);
        return view('edit',['sumit'=>$sumit]);
    }

    public function update(Request $request,  $id)
    {
        //Using quireBuilder
        /*DB::table('sumits')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,

           

        ]); */
        // Using Eloquent ORM
        $sumits = Sumit::find($id);
        $sumits->name = $request->name;
        $sumits->email = $request->email;
        $sumits->phone = $request->phone;
        $sumits->save();
        return redirect()->route('index')->with('status','Record has been updated successfully');
    }

    public function destroy($id)
    {
        //Using quireBuilder
        /*DB::table('sumits')->where('id', $id)->delete();*/

        // Using Eloquent ORM
        $sumits = Sumit::find($id);
        $sumits->delete();
        return redirect()->route('index')->with('status','Record has been deleted successfully');

    }
}
