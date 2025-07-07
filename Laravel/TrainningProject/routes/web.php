<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$Item = ['MOUSE', 'SCREEM','KEYBOARD','CPU'];

//http get, post
Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('aboutMe');
});

Route::get('/demo-crud', function() use ($Item) {
    return response()->json($Item);
});

Route::post('/demo-crud', function(\Illuminate\Http\Request $request) use ($Item) {
    $newItem = request('item');
    if ($newItem) {
        $Item[] = $newItem;
        return response()->json(['message' => 'Item added successfully!', 'items' => $Item]);
    }
    return response()->json(['message' => 'No item provided!'], 400);
});

//hiển thị dữ liệu từ controller qua route
Route::get('/DataMockup', [testController::class, 'DataMockup']);

//chuyền dữ liệu từ route sang controller
Route::get('/DataMockup/{id}', [testController::class, 'TakeData']);

// bladesyntax'
Route::get('/bladesyntax', [testController::class, 'giveInfBlade']);