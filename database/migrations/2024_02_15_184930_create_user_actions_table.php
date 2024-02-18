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
        Schema::create('user_actions', function (Blueprint $table) {
            $table->id("id_user_action");
            
            $table->unsignedBigInteger("id_user");
            $table->foreign("id_user")->references("id_user")->on("users")->onDelete('cascade');

            $table->unsignedBigInteger("id_action");
            $table->foreign("id_action")->references("id_action")->on("actions")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_actions');
    }
};
