<?php

namespace App\Http\Controllers\food;

use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller {
    public function createFood(Request $request) {
        $food = new Food();

        $food->title = $request->title;
        $food->price = $request->price;
        $food->category = $request->category;
        $food->description = $request->description;
        $food->save();

        return response()->json($food);
    }

    public function listAllFoods() {
        $foods = Food::all();

        return response()->json($foods);
    }

    public function showFood(Food $food) {
        return response()->json($food);
    }

    public function updateFood(Food $food, Request $request) {
        $food->title = $request->title;
        $food->price = $request->price;
        $food->category = $request->category;
        $food->description = $request->description;
        $food->save();

        return response()->json($food);
    }

    public function deleteFood(Food $food) {
        $food->delete();

        return response()->json($food);
    }
}
