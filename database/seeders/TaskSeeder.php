<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Setup Laravel Project',
            'description' => 'Install Laravel and configure environment',
            'status' => 'completed',
        ]);

        Task::create([
            'title' => 'Build Task API',
            'description' => 'Create the GET /tasks endpoint',
            'status' => 'in-progress',
        ]);
    }
}
