<?php

namespace Database\Seeders;

use App\Models\Job;
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
        User::factory(10)->create();
        Job::factory(10)->create();

        // Get all job IDs
        $jobIds = Job::pluck('id')->toArray();

        // Randomly select job IDs to bookmark
        $randomJobIds = array_rand($jobIds, 10); // Change 3 to however many you want to bookmark

        // Attach the selected jobs as bookmarks for the test user
        foreach ($randomJobIds as $jobId) {
            // get a random user each time
            $testUser = User::inRandomOrder()->first();
            $testUser->bookmarkedJobs()->attach($jobIds[$jobId]);
        }

        User::factory()->create([
            'name' => 'Danny Hobby',
            'email' => 'danny.hobby@outlook.com',
        ]);
    }
}
