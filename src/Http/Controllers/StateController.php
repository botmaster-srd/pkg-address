<?php

namespace Botmaster\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Botmaster\Address\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    public function index()
    {
        $data = State::get(['id','name','status']);

        if ($data->count() == 0) {

            $status = 200;
            $result = [
                'data' => null,
                'status' => 404,
                'message' => array('error'=>['States not found']),
                'content_type' => 'JSON String'
            ];
            return response()->json($result, 200);
        }

        $status = 200;
        $result = [
            'data' => $data,
            'status' => $status,
            'message' => array('success'=>['Success!']),
            'content_type' => 'JSON String'
        ];
        return response()->json($result, 200);

    }

    public function show($id)
    {
        $data = State::find($id);

        if ($data == null) {

            $status = 200;
            $result = [
                'data' => null,
                'status' => 404,
                'message' => array('error'=>['State not found']),
                'content_type' => 'JSON String'
            ];
            return response()->json($result, 200);
        }

        $status = 200;
        $result = [
            'data' => $data,
            'status' => $status,
            'message' => array('success'=>['Success!']),
            'content_type' => 'JSON String'
        ];
        return response()->json($result, 200);
    }

    public function create()
    {
        if (config('address.is_view_published')) {
            return view('botmaster/address/state_create');
        }else{
            return 'nothing';
        }
    }

    public function store(Request $request)
    {


        $rules = [
            'name' => 'required|unique:States',
            'status' => 'required|in:active,inactive'
        ];

        $custom_message = [];

        $validator = Validator::make($request->all(), $rules, $custom_message);

        if ($validator->fails()) {



            $status = 206;
            $result = [
                'data' => null,
                'status' => $status,
                'message' => $validator->errors(),
                'content_type' => 'JSON String'
            ];
            return response()->json($result, 200);
        }

        $data = State::create(
            ['name'=>$request->name, 'status'=>$request->status]
        );

        $status = 200;
        $result = [
            'data' => $data,
            'status' => $status,
            'message' => array('success'=>['State added successfully!']),
            'content_type' => 'JSON String'
        ];
        return response()->json($result, 200);

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
