<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->increments('id');
			$table->string('email', 250)->nullable();
			$table->string('ip', 32)->nullable();
			$table->string('wikiAccountName', 255)->nullable();
			$table->boolean('autoblock')->default(false);
			$table->boolean('hasAccount')->default(false);
			$table->string('message', 4096);
			$table->string('edits', 1024);
			$table->string('reason', 1024);
			$table->string('info', 2048)->nullable();
			$table->string('status', 255);
			$table->integer('admin_id')->nullable();
			$table->integer('old_admin_id')->nullable();
			$table->integer('last_log_id')->nullable();
			$table->char('email_token')->nullable();
			$table->boolean('oversighted')->default(false);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appeals', function (Blueprint $table) {
            //
        });
    }
}
