<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                [
                    'nome'=> 'Oculus Meta Quest 3',
                    'descricao'=> 'Oculos VR do Facebook Meta Cor Branco Metaverso',
                    'valor'=> 4450,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_818090-MLU72828204797_112023-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Samsung Galaxy A15',
                    'descricao'=> '4G Dual SIM 128 GB Azul escuro 4 GB RAM',
                    'valor'=> 869,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_668543-MLA75547177771_042024-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Sony Playstation 5',
                    'descricao'=> 'Marvels Spider-Man 2 825GB Standard',
                    'valor'=> 3660,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_998954-MLA76221324775_052024-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Nintendo Switch',
                    'descricao'=> 'OLED 64GB Standard cor branco e preto',
                    'valor'=> 2084,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_931983-MLU75891861591_042024-F.webp',
                    'user_id'=> 1,
                ],
            ]
        );
    }
}
