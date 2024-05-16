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
                    'nome'=> 'Camiseta Vermelha',
                    'descricao'=> 'Camiseta para vestir',
                    'valor'=> 250,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_993839-MLB69890299683_062023-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Camiseta Vermelha',
                    'descricao'=> 'Camiseta para vestir',
                    'valor'=> 250,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_993839-MLB69890299683_062023-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Camiseta Vermelha',
                    'descricao'=> 'Camiseta para vestir',
                    'valor'=> 250,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_993839-MLB69890299683_062023-F.webp',
                    'user_id'=> 1,
                ],
                [
                    'nome'=> 'Camiseta Vermelha',
                    'descricao'=> 'Camiseta para vestir',
                    'valor'=> 250,
                    'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_993839-MLB69890299683_062023-F.webp',
                    'user_id'=> 1,
                ],
            ]
        );
    }
}
