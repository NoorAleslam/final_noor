<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('premision_role')) {
            Schema::create('premision_role', function (Blueprint $table) {
                $table->bigInteger('role_id')->unsigned()->notNull();
                $table->bigInteger('premision_id')->unsigned()->notNull();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premision_role');
    }
};
