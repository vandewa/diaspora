<?php

namespace Database\Seeders;

use App\Models\Pendiri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendiris')->truncate();
        $data = [
            [
                'nama' => 'Tyovan Ari Widagdo',
                'jabatan' => 'Ketua Umum',
            ],
            [
                'nama' => 'Farid Gaban',
                'jabatan' => 'Ketua',
            ],
            [
                'nama' => 'Tafrihan',
                'jabatan' => 'Sekretaris Umum',
            ],
            [
                'nama' => 'Irfan Bahtiar',
                'jabatan' => 'Pengawas',
            ],
        ];

        foreach ($data as $datum) {
            Pendiri::create($datum);
        }
    }
}