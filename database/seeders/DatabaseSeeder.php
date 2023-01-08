<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\User;
// use App\Models\Kelas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kelas::factory(20)->create();

        Kelas::all()->each(function(Kelas $kelas) {
            $user = User::factory()->create();
            $users = collect([$user]);
            $kelas->users()->saveMany($users);
        });
    }
}
