<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create root file
        $rootFile = File::create([
            'name' => 'Root File',
            'description' => 'This is the root file',
        ]);

        // Create child files
        $child1 = File::create([
            'name' => 'Child 1',
            'description' => 'This is child 1',
            'parent_id' => $rootFile->id,
        ]);

        $child2 = File::create([
            'name' => 'Child 2',
            'description' => 'This is child 2',
            'parent_id' => $rootFile->id,
        ]);

        // Create more fake data as needed
    }
}
