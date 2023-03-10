<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    // GET ALL CUSTOMERS
    public function getAll()
    {
        // $data = Customer::get();
        $data = Customer::where('is_deleted', '==', 0)->get(
            [
                'id',
                'first_name',
                'last_name',
                'city',
                'country',
                'gender',
                'phone',
                'created_at'
            ]
        );
        foreach ($data as $row) {
            $row["full_name"] = $row->first_name . " " . $row->last_name;
            $row["created_at_str"] =  $row->created_at->format('d M y');
        }
        return response()->json($data, 200);
    }
    /*------------------------------------------*/
    // GET BY ID
    public function get($id)
    {
        $data = Customer::find($id);
        return response()->json($data, 200);
    }
    /*------------------------------------------*/
    //DELETE BY ID
    public function delete($id)
    {
        $res = Customer::find($id)->delete();
        return response()->json([
            'message' => "Successfully removed!",
            'success' => true
        ], 200);
    }
    /*------------------------------------------*/
    //CREATE NEW CUSTOMER
    public function create(Request $request)
    {
        $data['first_name'] = $request['first_name'];
        $data['last_name'] = $request['last_name'];
        $data['country'] = $request['country'];
        $data['city'] = $request['city'];
        $data['currency'] = $request['currency'];
        $data['pay_per_hour'] = $request['pay_per_hour'];
        $data['gender'] = $request['gender'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        $data['date_of_birth'] = $request['date_of_birth'];

        Customer::create($data);

        return response()->json([
            'message' => "Successfully added!",
            'success' => true
        ], 200);
    }
    /*------------------------------------------*/
    // UPDATE
    public function update(Request $request, $id)
    {
        $data['first_name'] = $request['first_name'];
        $data['last_name'] = $request['last_name'];
        $data['country'] = $request['country'];
        $data['city'] = $request['city'];
        $data['currency'] = $request['currency'];
        $data['pay_per_hour'] = $request['pay_per_hour'];
        $data['gender'] = $request['gender'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        $data['date_of_birth'] = $request['date_of_birth'];

        Customer::find($id)->update($data);

        return response()->json([
            'message' => "Saved!",
            'success' => true
        ], 200);
    }
    /*------------------------------------------*/
}
