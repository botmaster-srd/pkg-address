<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $state = State::all();

        // $result = "This is Address Package from Controller > View";

        return view('address::state_index', compact('state'));
    }

    public function create()
    {
        return "This is Create State function";
    }

    public function store()
    {
        return "This is Store State function";
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
