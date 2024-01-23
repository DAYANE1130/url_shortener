<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Exemplo de dados para a tabela 'urls'
        $data = [
            [
                'long_url' => 'https://www.youtube.com/watch?v=CvNf8qMgrQ8&list=PLEYD0tJWcmR5LPUrtys19zdkjiDTnK3wL&index=5',
                'short_url' => 'https://ulvis.net/9ALW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'long_url' => 'https://www.canva.com/pt_br/',
                'short_url' => 'https://ulvis.net/PwXh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'long_url' => 'https://app.diagrams.net/#G1EB5ZtJkv_ZV8zrnmeJr4OqEFrq78FXEf',
                'short_url' => 'https://ulvis.net/BmE7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Inserir os dados na tabela 'urls'
        DB::table('urls')->insert($data);
    }
}