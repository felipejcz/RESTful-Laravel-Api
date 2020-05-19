<?php

use App\Category;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(Product::class, 30)->create([
            'category' => $this->getCategoryId(),
            'owner' => $this->getUserId(),
        ]);
    }

    private function getCategoryId() {
        $category = Category::inRandomOrder()->first();
        return $category->id;
    }

    private function getUserId() {
        $user = User::inRandomOrder()->first();
        return $user->id;
    }
}
