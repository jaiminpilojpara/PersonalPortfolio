<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserIntroduction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql="CREATE TABLE `user_introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_introduction_main_image` varchar(250) NOT NULL,
  `user_introduction_small_image` varchar(250) NOT NULL,
  `user_introduction_name` varchar(255) NOT NULL,
  `user_introduction_work` varchar(255) NOT NULL,
  `user_introduction_about_me` longtext NOT NULL,
  `user_introduction_address` longtext NOT NULL,
  `user_introduction_mobile` varchar(255) NOT NULL,
  `user_introduction_website` varchar(255) NOT NULL,
  `user_introduction_email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
