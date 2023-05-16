<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Dog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Dog::factory()->count(3)->state(new Sequence(
            ['name' => 'George', 'breed' => 'collie'],
            ['name' => 'Dogbert', 'breed' => 'something else'],
            ['name' => 'Sir Herds-a-lot', 'breed' => 'border collie']
        ))->create();

        User::factory()->create([
            'name' => 'Guy Smiley',
            'email' => 'guy@smiley.com',
            'password' => Hash::make('password'),
        ]);
    }
}
