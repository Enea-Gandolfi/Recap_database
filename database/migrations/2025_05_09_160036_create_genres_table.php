<?php

use App\Models\Genre;
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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        $genres = ['Action','Adventure','RPG','Shooter','Strategy','Simulation','Sports','Racing','Puzzle','Horror','Fantasy'];

        foreach($genres as $genre){
            Genre::create([
                'name'=> $genre
            ]);
        }

    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
