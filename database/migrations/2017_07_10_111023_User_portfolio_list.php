<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPortfolioList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql="CREATE TABLE `user_portfolio_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_portfolio_id` int(11) NOT NULL,
  `user_portfolio_list_project_name` varchar(250) NOT NULL,
  `user_portfolio_list_project_list` varchar(250) NOT NULL,
  `user_portfolio_list_project_image` varchar(250) NOT NULL,
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
