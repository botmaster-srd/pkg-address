<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $district = District::all();

        // $result = "This is Address Package from Controller > View";

        return view('address::district_index', compact('district'));
    }

    public function show($id)
    {
        return "This is Show district function";
    }


    public function create()
    {
        return "This is Create district function";
    }

    public function store()
    {
        return "This is Store district function";
    }


    public function edit($id)
    {
        return "This is Edit district function";
    }


    public function destroy($id)
    {
        return "This is destroy district function";
    }


}
