<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateUserAPITokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_a_p_i_tokens', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_deactivatable')->index()->default(true)->nullable()->comment('comment');
            $table->boolean('is_notifiable')->index()->default(false)->nullable()->comment('comment');
            //$table->string('colour')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->nullable()->comment('comment');
            $table->text('api_token')->comment('comment');
            //$table->text('payload')->comment('comment')->nullable();
            $table->string('code_active')->index()->nullable()->comment('comment');
            $table->string('ip_address_request')->index()->nullable()->comment('comment');
            $table->string('active_role')->index()->nullable()->comment('comment');
            $table->timestamp('time_generate')->index()->nullable()->comment('comment');
            $table->timestamp('time_active')->index()->nullable()->comment('comment');
            $table->timestamp('time_deactive')->index()->nullable()->comment('comment');
            $table->double('duration_active')->index()->default(0)->nullable()->comment('comment');
            $table->string('user_id')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            
            //$table->dropPrimary('id');
            //$table->primary('name');
            //$table->primary(array('name'));
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('user_id')->references('user_code')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_a_p_i_tokens');
    }
}
