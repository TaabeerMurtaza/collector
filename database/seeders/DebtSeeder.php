<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DebtSeeder extends Seeder
{
    public function run()
    {
        // Path to your JSON file
        $jsonFilePath = public_path('seed/debts.json');

        // Check if file exists
        if (!File::exists($jsonFilePath)) {
            $this->command->error('File not found at ' . $jsonFilePath);
            return;
        }

        // Get the content of the JSON file
        $jsonContent = File::get($jsonFilePath);

        // Decode JSON into an array
        $data = json_decode($jsonContent, true);

        // Check if JSON data is valid
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->command->error('Invalid JSON format');
            return;
        }

        // Insert data into the database
        foreach ($data as $row) {
            DB::table('debts')->updateOrInsert(
                $row
            );
        }

        $this->command->info('Debts table seeded!');
    }
}
