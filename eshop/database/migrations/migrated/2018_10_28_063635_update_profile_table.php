<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfileTable extends Migration
{

    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('country',20);
            $table->softDeletes();
        });
    }

    public function down()
    {
       Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('country','deleted_at');
        });
    }
}
