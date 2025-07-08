<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

//validate
route::post('/validate', [testController::class, 'store']);


//breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';