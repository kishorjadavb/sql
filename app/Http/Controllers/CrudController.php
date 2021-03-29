<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CrudController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('regform');
    }


    public function store(Request $request)
    {
        // return $request->input();
        $res = new crud;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->phone = $request->input('phone');
        $res->gender = $request->input('gender');
        $res->plan = $request->input('plan');
        $res->startDate = $request->input('startDate');
        $res->endDate = $request->input('endDate');
        $res->amount = $request->input('amount');
        $res->save();

        $request->session()->flash('msg', 'Buddy Added');
        return redirect('datatable');
    }


    public function show(crud $crud)
    {
        return view('datatable')->with('arrayList', crud::all());
    }
    public function showSearch(crud $crud)
    {
        return view('searchV')->with('arrayList', crud::all());
    }


    public function edit(crud $crud, $id)
    {
        return view('updateV')->with('arrayList', crud::find($id));
    }


    public function update(Request $request, crud $crud)
    {
        // return $request->input();
        $res = crud::find($request->id);
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->phone = $request->input('phone');
        $res->gender = $request->input('gender');
        $res->plan = $request->input('plan');
        $res->startDate = $request->input('startDate');
        $res->endDate = $request->input('endDate');
        $res->amount = $request->input('amount');
        $res->save();

        $request->session()->flash('msg', 'Buddy Updated');
        return redirect('datatable');
    }


    public function destroy(crud $crud, $id)
    {
        crud::destroy(array('id', $id));
        return redirect('datatable');
    }

    public function getUsers()
    {
        return Datatables::of(crud::query())->make(true);
    }
}
