<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    // GET ALL SELLERS
    public function getAll()
    {
        // $data = Seller::get();
        $data = Seller::where('is_deleted', '==', 0)->get(
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
        $data = Seller::find($id);
        return response()->json($data, 200);
    }
    /*------------------------------------------*/
    //DELETE BY ID
    public function delete($id)
    {
        $res = Seller::find($id)->delete();
        return response()->json([
            'message' => "Successfully removed!",
            'success' => true
        ], 200);
    }
    /*------------------------------------------*/
    //CREATE NEW SELLER
    public function create(Request $request)
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
    /*------------------------------------------*/
    // UPDATE
    public function update(Request $request, $id)
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
