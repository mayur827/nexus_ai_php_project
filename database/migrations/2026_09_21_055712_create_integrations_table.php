<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('integrations', function (Blueprint $table) {
            $table->id();
            $table->string('tool_name');
            $table->text('description');
            $table->string('status')->default('Connected');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('integrations');
    }
};