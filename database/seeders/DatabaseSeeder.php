<?php
namespace Database\Seeders;
use App\Models\User;
use App\Models\Article;
use App\Models\Product;
use App\Models\Movie;
use App\Models\Profile;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**Seed the application's database.*/
    public function run(): void
    {
        //User::factory(10)->create();
        //Article::factory(10)->create();
        //Product::factory(11)->create();
        // Movie::factory(15)->create();
        // Profile::factory(3)->create();
        // Post::factory(12)->create();
        // PostUserLike::factory(12)->create();
        // Comment::factory(12)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
