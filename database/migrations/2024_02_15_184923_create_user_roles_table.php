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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id("id_user_role");

            $table->unsignedInteger("id_user");
            $table->foreign("id_user")->references("id_user")->on("id_user")->onDelete('cascade');

            $table->unsignedInteger("id_role");
            $table->foreign("id_role")->references("id_role")->on("id_role")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
