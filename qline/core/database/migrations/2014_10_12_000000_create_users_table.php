<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            
            //$table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->string('id')->index()->unique()->comment('comment');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            //$table->string('colour_id')->index()->nullable()->comment('comment');
            $table->string('code')->index()->nullable()->comment('comment');
            $table->string('code_epf')->index()->nullable()->comment('comment');
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
            $table->string('strategic_business_unit_id')->index()->nullable()->comment('comment');
            $table->string('department_id')->index()->nullable()->comment('comment');
            $table->string('section_id')->index()->nullable()->comment('comment');
            $table->string('grade')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('name');
        });
        
        Schema::table('users', function($table) {
            $table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('company_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('companies')->onUpdate('cascade');
            //$table->foreign('strategic_business_unit_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('strategic_business_units')->onUpdate('cascade');
            //$table->foreign('department_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('departments')->onUpdate('cascade');
            //$table->foreign('section_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('sections')->onUpdate('cascade');
        });
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
