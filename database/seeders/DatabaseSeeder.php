<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseItem;
use App\Models\Material;
use App\Models\Payment;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Membuat beberapa user
        User::factory(10)->create();

        // Membuat beberapa kategori
       Category::factory(5)->create();

       Course::factory(5)->create();

       CourseItem::factory(50)->create();

        // Membuat kursus beserta item, material, dan review
//        $courses = Course::factory(10)
//            ->for($categories->random())
//            ->has(CourseItem::factory()->count(5))
//            ->has(Material::factory()->count(3))
//            ->has(Review::factory()->count(2))
//            ->create();
//
//        // Menambahkan kursus ke dalam cart pengguna secara acak
//        foreach ($users as $user) {
//            Cart::factory()->create([
//                'user_id' => $user->id,
//                'course_id' => $courses->random()->id,
//            ]);
//        }

        // Membuat beberapa pembayaran untuk pengguna
//        Payment::factory(10)->create();
    }
}
