<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function DataMockup(){
        $Item =['vip'=>'Hung','kuibap'=>'khai'];
        return $Item; 
    }
    public function TakeData($id){
        $Item =['1'=>'Hung','2'=>'khai'];
        if(array_key_exists($id, $Item)){
            return $Item[$id];
        }
        return response()->json(['message' => 'Item not found'], 404);
    }
    public function giveInfBlade(){
        return view('bladesyntax', [
            'name' => 'Phạm Tiến Hưng',
            'age' => 21,
            'skills' => ['PHP', 'Laravel', 'Vue.js']
        ]);
    }
}
