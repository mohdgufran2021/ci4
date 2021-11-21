<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i <= 10; $i++) {
            $data = [
                'slug' => $faker->slug,
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ];

            // Using Query Builder
            $this->db->table('news')->insert($data);
        }
    }

}
