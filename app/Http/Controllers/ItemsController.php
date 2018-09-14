<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function getItems(Request $request)
    {
        $condition = [];
        if (isset($request->quantity)) {
            $quantity = $request->quantity;
            $condition[] = ['quantity', '=', $quantity];

        }
        if (isset($request->priceInt)) {
            $priceInt = explode(',', $request->priceInt);
            $condition[] = ['price', '>=', $priceInt[0]];
            $condition[] = ['price', '<=', $priceInt[1]];
        }
        if (isset($request->dateInt)) {
            $dateInt = explode(',', $request->dateInt);
            $condition[] = ['date', '>=', $dateInt[0]];
            $condition[] = ['date', '<=', $dateInt[1]];
        }
        if (isset($request->sortByDate)) {
            $sortByDate = $request->sortByDate;
            $items = Item::where($condition)->orderBy("date", strtoupper($sortByDate))->get();

        } else
            if (isset($request->sortByName)) {
                $sortByName = $request->sortByName;

                $items = Item::where($condition)->orderBy("name", strtoupper($sortByName))->get();
            } else {
                $items = Item::where($condition)->get();
            }
        return response()->json($items);
    }
}
