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
        Schema::create('reimbursement_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->integer('price');
            $table->boolean('documentation_needed')->default(false);
            $table->string('before')->nullable();
            $table->string('after')->nullable();
            $table->string('documentation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reimbursement_forms');
    }
};
