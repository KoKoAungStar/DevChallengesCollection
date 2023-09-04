<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
{
    return view('dropdown');
}

public function getItems()
{
    $items = Item::all();
    return response()->json($items);
}
}
