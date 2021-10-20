<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\Address;
use Botmaster\Address\Models\State;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $data = Address::all();

        return view('address::address_index', compact('data'));
    }
}
