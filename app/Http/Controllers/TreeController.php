<?php

namespace App\Http\Controllers;

use App\Tree;
use App\Http\Resources\TreeResource;
use Illuminate\Support\Facades\Response;

class TreeController extends Controller
{
    public function all()
    {
        return TreeResource::collection(Tree::all());
    }

    public function one($id)
    {
        $tree = Tree::find($id);

        if (!$tree) {
            return Response::json([
                'message' => 'id ' . $id . ', not exists'
            ], 404);
        }

        return $tree;
    }
}
