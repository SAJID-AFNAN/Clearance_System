<?php

namespace Database\Seeders;

use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $examTypes = ['Mid-term', 'Final'];
        $subjectIds = [1, 2, 3, 4, 5,];

        $startDate = Carbon::parse('2026-02-26');

        $now = Carbon::now();
        foreach ($subjectIds as $index => $subjectId) {
            foreach ($examTypes as $typeIndex => $type) {
                Exam::create([
                    'name' => $type,
                    'date' => $startDate->copy()->addDays($index * 5 + $typeIndex),
                    'subject_id' => $subjectId
                ]);
            }
        }
    }
}
