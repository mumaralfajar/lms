<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_exist = Category::all();

        if (!$is_exist->count()) {
            $category = new Category();
            $category->name = 'SD';
            $category->slug = 'sd';
            $category->icon_class = 'fa-school';
            $category->is_active = 1;
            $category->save();

            $category = new Category();
            $category->name = 'SMP';
            $category->slug = 'smp';
            $category->icon_class = 'fa-chalkboard-teacher';
            $category->is_active = 1;
            $category->save();

            $category = new Category();
            $category->name = 'SMA';
            $category->slug = 'sma';
            $category->icon_class = 'fa-user-graduate';
            $category->is_active = 1;
            $category->save();

        }
    }
}
