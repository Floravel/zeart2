<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration {
    public function up()
    {
        Schema::create('artworks', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignIdFor(\App\Models\User::class);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('artworks');
    }
}
