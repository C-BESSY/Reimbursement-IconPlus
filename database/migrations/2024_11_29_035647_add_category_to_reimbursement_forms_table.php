<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('reimbursement_forms', function (Blueprint $table) {
            $table->string('category')->nullable()->after('price'); // Adjust 'after' as needed
        });
    }

    public function down()
    {
        Schema::table('reimbursement_forms', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
