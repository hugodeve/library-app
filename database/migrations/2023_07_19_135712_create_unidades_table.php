<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    
        DB::table('unidades')->insert([
            'nome' => 'Unidade Blumenau',
        ]);
    
        DB::table('unidades')->insert([
            'nome' => 'Unidade Rio de Janeiro',
        ]);
    
        DB::table('unidades')->insert([
            'nome' => 'Unidade Navegantes',
        ]);
    
        DB::table('unidades')->insert([
            'nome' => 'Unidade Itajai',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades');
    }
};
