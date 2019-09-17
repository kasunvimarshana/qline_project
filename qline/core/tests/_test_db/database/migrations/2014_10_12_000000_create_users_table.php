<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            */
            
            $table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->nullable()->default(false)->comment('comment');
            $table->boolean('is_active')->index()->nullable()->default(false)->comment('comment');
            //$table->string('colour')->index()->nullable()->comment('comment');
            $table->string('user_code')->index()->unique()->comment('comment');
            $table->string('epf_code')->index()->nullable()->comment('comment');
            $table->string('name_first')->index()->nullable()->comment('comment');
            $table->string('name_last')->index()->nullable()->comment('comment');
            $table->string('phone_mobile')->index()->nullable()->comment('comment');
            //$table->string('username')->index()->unique()->comment('comment');
            $table->string('password')->index()->nullable()->comment('comment');
            $table->rememberToken()->comment('comment');
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->string('email')->default(null)->nullable()->comment('comment');
            $table->string('company_id')->index()->nullable()->comment('comment');
            $table->string('department_id')->index()->nullable()->comment('comment');
            $table->string('section_id')->index()->nullable()->comment('comment');
            $table->string('grade')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            
            //$table->dropPrimary('id');
            //$table->primary('name');
            $table->primary(array('user_code'));
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('company_id')->references('name')->on('companies')->onUpdate('cascade');
            //$table->foreign('department_id')->references('name')->on('departments')->onUpdate('cascade');
            //$table->foreign('section_id')->references('name')->on('sections')->onUpdate('cascade');
        });
        
        DB::statement('ALTER TABLE users MODIFY COLUMN id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
