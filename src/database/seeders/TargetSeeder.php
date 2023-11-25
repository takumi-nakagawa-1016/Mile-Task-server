<?php

namespace Database\Seeders;

use App\Models\Target;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TargetSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Target::create([
                'id' => (string) Str::uuid(),
                'name' => 'Target '.$i,
                'due_time' => now()->addDays(random_int(1, 30)), // 1日から30日後までのランダムな日付
            ]);
        }
    }
}
