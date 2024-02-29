<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # belongsToリレーションを活用しfactoryで生成
        Post::factory()->count(3)
                ->for(User::factory()->state([
                    'name' => '山本舞香',
                ]))->create();
    }
}
