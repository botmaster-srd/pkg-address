<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\Taluka;
use Illuminate\Http\Request;

class TalukaController extends Controller
{
    public function index()
    {
        $taluka = Taluka::all();

        // $result = "This is Address Package from Controller > View";

        return view('address::taluka_index', compact('taluka'));
    }

    public function show($id)
    {
        return "This is Show taluka function";
    }


    public function create()
    {
        return "This is Create taluka function";
    }

    public function store()
    {
        return "This is Store taluka function";
    }


    public function edit($id)
    {
        return "This is Edit taluka function";
    }


    public function destroy($id)
    {
        return "This is destroy taluka function";
    }


}
