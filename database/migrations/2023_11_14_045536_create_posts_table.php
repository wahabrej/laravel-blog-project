<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
          

            $table->id();
           
            $table->string("title")->nullable;
            $table->longText("des")->nullable;
            $table->string("image")->nullable;
            $table->string("usertype")->nullable;
            $table->string("name")->nullable;
            $table->string("user_id")->nullable;
           
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
