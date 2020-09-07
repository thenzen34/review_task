<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddReviewsToReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('reviews')->insert(
                array(
                    'name' => sprintf('name%d', $i),
                    'email' => sprintf('email%d@some_domain.ru', $i),
                    'review' => sprintf('review text number %d', $i)
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::table('reviews')->truncate();
    }
}
