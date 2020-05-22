<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = factory(Category::class, 10)->create([
            'user_id' => $this->getUserId(),
        ]);
    }

    private function getUserId() {
        $user = User::inRandomOrder()->first();
        return $user->id;
    }
}
