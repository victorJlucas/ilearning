<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable()->after('name');
            $table->string('slug')->after('last_name');
            $table->string('picture')->nullable()->after('password');

            $table->string('strip_id')->nullable()->after('picture');
            $table->string('card_brand')->nullable()->after('strip_id');
            $table->string('card_last_four')->nullable()->after('card_brand');
            $table->string('trial_ends_at')->nullable()->after('card_last_four');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('slug');
            $table->dropColumn('picture');

            $table->dropColumn('strip_id');
            $table->dropColumn('card_brand');
            $table->dropColumn('card_last_four');
            $table->dropColumn('trial_ends_at');

        });
    }
}
