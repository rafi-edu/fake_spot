<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Dosen::where('id', 1)->exists()){
            Dosen::create([
                'nama' => 'Jaki Dosen S.T., M.T.',
                'jenis_kelamin' => 'L',
                'user_id' => 2,
            ]);
        }
        // $dosens = [
        //     [
        //         'nama' => 'Jaki Dosen S.T., M.T.',
        //         'jenis_kelamin' => 'L',
        //         'user_id' => 2,
        //     ],
        // ];

        // foreach ($dosens as $dosen) {
        //     Dosen::create($dosen);
        // }
    }
}
