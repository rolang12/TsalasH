<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\OrderResume;
use App\Http\Livewire\Sabores;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::get('/menu', function() {
    return view('menu');
})->middleware(['auth:sanctum', 'verified'])->name('menu');

Route::name('cart.')
    ->middleware('auth:sanctum')
    ->group( function() {

    Route::post('/cart-add', [App\Http\Controllers\CartController::class, 'add'])
        ->name('cart.add');

    Route::get('/cart-checkout', [App\Http\Controllers\CartController::class, 'cart'])
        ->name('cart.checkout');

    Route::get('/cart-clear', [App\Http\Controllers\CartController::class, 'clear'])
        ->name('cart.clear');

    Route::post('/cart-removeitem', [App\Http\Controllers\CartController::class, 'removeitem'])
        ->name('cart.removeitem');

});

Route::name('user.')
    ->middleware('auth:sanctum')
    ->group( function() {

    Route::post('/user-create', [App\Http\Controllers\UsersController::class, 'create'])
        ->name('user.create');

    Route::post('/user-store', [App\Http\Controllers\UsersController::class, 'store'])
        ->name('user.store');

    Route::get('/user-show', [App\Http\Controllers\UsersController::class, 'show'])
        ->name('user.show');

    Route::get('/user-show-user/{id}', [App\Http\Controllers\UsersController::class, 'showUser'])
        ->name('user.show-user');

    Route::get('/user-edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])
        ->name('user.edit');

    Route::put('/user-update', [App\Http\Controllers\UsersController::class, 'update'])
        ->name('user.update');

    Route::get('/user-destroy/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])
        ->name('user.destroy');

});

Route::name('products.')
    ->middleware('auth:sanctum')
    ->group( function() {

    Route::get('/products-create', [App\Http\Controllers\ProductsController::class, 'create'])
        ->name('crud.create');

    Route::post('/products-store', [App\Http\Controllers\ProductsController::class, 'store'])
        ->name('crud.store');

    Route::get('/products-show', [App\Http\Controllers\ProductsController::class, 'show'])
        ->name('crud.show');

    Route::get('/products-show-product/{id}', [App\Http\Controllers\ProductsController::class, 'showProduct'])
        ->name('crud.show-product');

    Route::get('/products-edit/{id}', [App\Http\Controllers\ProductsController::class, 'edit'])
        ->name('crud.edit');

    Route::put('/products-update', [App\Http\Controllers\ProductsController::class, 'update'])
        ->name('crud.update');

    Route::get('/products-destroy/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])
        ->name('crud.destroy');

});



Route::get('/sabors', [App\Http\Livewire\Sabores::class, 'render'])
        ->name('sabors');
Route::get('/sabors-edit/{id}', [App\Http\Livewire\Sabores::class, 'edit'])
        ->name('sabors.edit');
Route::put('/sabores-update', [App\Http\Livewire\Sabores::class, 'update'])
        ->name('sabores.update');




Route::name('orders.')
    ->middleware('auth:sanctum')
    ->group( function() {

    Route::get('/order-create', [App\Http\Controllers\OrdersController::class, 'create'])
    ->name('crud.create');

    Route::post('/order-store', [App\Http\Controllers\OrdersController::class, 'store'])
        ->name('crud.store');

    Route::get('/orders-resume', [App\Http\Controllers\OrdersController::class, 'orderResume'])
        ->name('orders-resume');

    Route::get('/orders-client-resume/{orderid}/{sabores}', [App\Http\Controllers\OrdersController::class, 'orderClientResume'])
        ->name('orders-client-resume');

    Route::get('/order-show', [App\Http\Controllers\OrdersController::class, 'show'])
        ->name('crud.show');

    Route::get('/order-show-order/{id}', [App\Http\Controllers\OrdersController::class, 'showOrder'])
        ->name('crud.show-order');

    Route::get('/order-edit/{id}', [App\Http\Controllers\OrdersController::class, 'edit'])
        ->name('crud.edit');

    Route::put('/order-update', [App\Http\Controllers\OrdersController::class, 'update'])
        ->name('crud.update');

    Route::get('/order-destroy/{id}', [App\Http\Controllers\OrdersController::class, 'destroy'])
        ->name('crud.destroy');

});
