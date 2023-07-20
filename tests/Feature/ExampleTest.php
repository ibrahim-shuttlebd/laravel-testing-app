<?php

use App\Models\Product;

it('homepage contains an empty table', function () {
    $response = $this->get('/products');
    $response->assertStatus(200);
    // $response->assertText(_('No products found'));
});

it('homepage contains non empty table', function(){
    Product::create([
        'name' => 'Product 1',
        'price' => 123,
    ]);

    $response = $this->get('/products');
    $response->assertStatus(200);
    $response->assertDontSee(_('No products found'));

});
