<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', function(){
    return Product::all();
});


Route::post('/products', function(){
    return Product::create([
        'name' => 'Product One',
        'slug' => 'proudct-1',
        'description' => 'This is product one',
        'price' => '99.99'
    ]);
});

Route::get('/products', function(){
    return 'Products';
});