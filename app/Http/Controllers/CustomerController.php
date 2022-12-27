<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    // GET ALL CUSTOMERS
    public function getAllCustomers()
    {
        $data = Customer::get();
        return response()->json($data, 200);
    }
    /*------------------------------------------*/
    // GET BY ID
    public function getByID($id)
    {
        $data = Customer::find($id);
        return response()->json($data, 200);
    }
    /*------------------------------------------*/
    //DELETE BY ID
    public function deleteByID($id)
    {
        $res = Customer::find($id)->delete();
        return response()->json([
            'message' => "Successfully removed!",
            'success' => true
        ], 200);
    }
    /*------------------------------------------*/
    //CREATE NEW CUSTOMER
    public function createCustomer(Request $request)
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
    public function updateByID(Request $request, $id)
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
