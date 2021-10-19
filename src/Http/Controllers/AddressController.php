<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\State;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $state = State::all();

        $result = config('address.addr');

        // $result = "This is Address Package from Controller > View";


        return view('address::index', compact('result'));
    }
}
