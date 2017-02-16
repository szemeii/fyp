<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://static.pexels.com/photos/36764/marguerite-daisy-beautiful-beauty.jpg',
            'title' => 'White Flower',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://static.pexels.com/photos/36753/flower-purple-lical-blosso.jpg',
            'title' => 'Purple Flower',
            'description' => 'Super nice - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://www.drodd.com/images14/flower18.jpg',
            'title' => 'Pink Flower',
            'description' => 'Super pretty - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://www.drodd.com/images14/flower4.jpg',
            'title' => 'Yellow Flower',
            'description' => 'Super gorgeous - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://media02.hongkiat.com/ww-flower-wallpapers/blueflowers.jpg',
            'title' => 'Blue Flower',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();
    }
}
