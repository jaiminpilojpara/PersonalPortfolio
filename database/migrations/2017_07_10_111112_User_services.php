<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql="CREATE TABLE `user_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_services_name` varchar(250) NOT NULL,
  `user_services_desc` longtext NOT NULL,
  `user_services_icon` varchar(250) NOT NULL COMMENT 'linea-icons',
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
