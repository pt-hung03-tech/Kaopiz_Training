<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function DataMockup()
    {
        $Item = ['vip' => 'Hung', 'kuibap' => 'khai'];
        return $Item;
    }
    public function TakeData($id)
    {
        $Item = ['1' => 'Hung', '2' => 'khai'];
        if (array_key_exists($id, $Item)) {
            return $Item[$id];
        }
        return response()->json(['message' => 'Item not found'], 404);
    }
    public function giveInfBlade()
    {
        return view('bladesyntax', [
            'name' => 'Phạm Tiến Hưng',
            'age' => 21,
            'skills' => ['PHP', 'Laravel', 'Vue.js']
        ]);
    }
    //rules for validation
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
        ]);
        return response()->json([
            'message' => 'Data is valid',
            'data' => $validated
        ]);
    }
}
