<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    // GET ALL SELLERS
    public function getAllSellers()
    {
        $data = Seller::get();
        return response()->json($data, 200);
    }

    // GET BY ID
    public function getByID($id)
    {
        $data = Seller::find($id);
        return response()->json($data, 200);
    }

    //DELETE BY ID
    public function deleteByID($id)
    {
        $res = Seller::find($id)->delete();
        return response()->json([
            'message' => "Successfully removed!",
            'success' => true
        ], 200);
    }

    //CREATE NEW SELLER
    public function createSeller(Request $request)
    {
        $data['first_name'] = $request['first_name'];
        $data['last_name'] = $request['last_name'];
        $data['country'] = $request['country'];
        $data['city'] = $request['city'];
        $data['currency'] = $request['currency'];
        $data['cost_per_hour'] = $request['cost_per_hour'];
        $data['gender'] = $request['gender'];
        $data['skills'] = $request['skills'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        $data['date_of_birth'] = $request['date_of_birth'];

        Seller::create($data);
        return response()->json([
            'message' => "Successfully added!",
            'success' => true
        ], 200);
    }

    // UPDATE
    public function updateByID(Request $request, $id)
    {
        $data['first_name'] = $request['first_name'];
        $data['last_name'] = $request['last_name'];
        $data['country'] = $request['country'];
        $data['city'] = $request['city'];
        $data['currency'] = $request['currency'];
        $data['cost_per_hour'] = $request['cost_per_hour'];
        $data['gender'] = $request['gender'];
        $data['skills'] = $request['skills'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        $data['date_of_birth'] = $request['date_of_birth'];

        Seller::find($id)->update($data);
        return response()->json([
            'message' => "Saved!",
            'success' => true
        ], 200);
    }
}
