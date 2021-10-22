<?php

namespace Database\Seeders;

use App\Models\Instrutor;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        Instrutor::create(['nome' => 'Admin', 'email' => 'admin@admin.com', 'senha' => bcrypt('123456')]);
    }
}
