<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $data = State::all();

        // $result = "This is Address Package from Controller > View";

        return view('address::state_index', compact('data'));
    }

    public function show($id)
    {
        $data = State::find($id);
        // dd($data->toArray());

        return view('address::state_show', compact('data'));
    }


    public function create()
    {
        return view('address::state_create');
    }

    public function store(Request $request)
    {


         $request->validate([
            'name' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        dd($request->status);

        // dd($validate);

        State::create([
            'name'=> $request->name,
            'status'=> $request->status,
        ]);

        // return redirect()->route('address.state.index')
        //     ->with('success', 'State created successfully.');
    }


    public function edit($id)
    {
        return "This is Edit State function";
    }


    public function destroy($id)
    {
        return "This is destroy State function";
    }


}
