<?php

namespace App\Http\Controllers;

use App\Models\community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{

    public function getAll()
    {
        $data = Community::get();
        return $data;
    }
    // ----------------------------------------
    public function get($id)
    {
        $data = Community::find($id);
        return $data;
    }
    // ----------------------------------------
    public function delete($id)
    {
        $res = Community::find($id)->delete();
        return response()->JSON([
            'message' => 'Deleted!',
            'success' => true
        ], 200);
    }
    // ----------------------------------------
    public function update(Request $request, $id)
    {
        $data['id'] = $request['id'];
        $data['name'] = $request['name'];
        $data['description'] = $request['description'];
        Community::find($id)->update($data);
        return response()->JSON([
            'message' => 'Saved!',
            'success' => true
        ], 200);
    }
    // ----------------------------------------
    public function create(Request $request)
    {
        $data['id'] = $request['id'];
        $data['name'] = $request['name'];
        $data['description'] = $request['description'];
        Community::create($data);
        return response()->JSON([
            'message' => 'Added!',
            'success' => true
        ], 200);
    }
    // ----------------------------------------
}
