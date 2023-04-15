<?php

namespace Database\Seeders;

use App\DomainDrivenDesign\Domain\Task\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->create([
            'name' => 'Iniciar a tarefa 1',
            'category' => 'desenvolvimento'
        ]);

        Task::factory()->create([
            'name' => 'Enviar para teste a tarefa 1',
            'category' => 'homologacao'
        ]);
    }
}
