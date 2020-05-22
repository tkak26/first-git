<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameRequestIdToStatusIdOnRequestPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_plans', function (Blueprint $table) {
            $table->renameColumn('request_id', 'status_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_plans', function (Blueprint $table) {
            $table->renameColumn('request_id', 'status_id');
        });
    }
}
