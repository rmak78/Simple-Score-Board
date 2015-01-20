<?php
/*
Plugin Name: Score Board Plugin
Plugin URI: http://www.sutlej.net/plugins/
Description: This Plugin will display scores of four teams on the webpage
Author: Rana Mansoor Akbar Khan, Muhammad Wasim, Kamran Sarwar
Version: 1.0
Author URI: http://www.sutlej.net/

Copyright 2015  Sutlej.net

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA 
 */

 // Copy Paste Plugin Function from Excercise File Chapter3: KAMRAN
 
 // Copy paste Templates for admin page From Excersise File Chapter5: MANSOOR
 function score_borad_init()
{
	register_setting('score_board_settings','score_board_team1_name');
	register_setting('score_board_settings','score_board_team2_name');
	register_setting('score_board_settings','score_board_team3_name');
	register_setting('score_board_settings','score_board_team4_name');
	register_setting('score_board_settings','score_board_team1_score');
	register_setting('score_board_settings','score_board_team2_score');
	register_setting('score_board_settings','score_board_team3_score');
	register_setting('score_board_settings','score_board_team4_score');
}
add_action('admin_init','score_borad_init');

function score_board_option_page()
{
	?>
	<div class="wrap"><?php screen_icon(); ?>
	<h2>Score Board Option Page</h2>
	<p> Type explanation text here</p>
	<form action="options.php" method="post" id="score-board-options-form">
	<?php settings_fields('score_board_settings'); ?>
	<h3><label for="score_board_team1_name">Team 1 Name: </label> <input
		type="text" id="score_board_team1_name" name="score_board_team1_name"
		value="<?php echo esc_attr( get_option('score_board_team1_name') ); ?>" /></h3>
	<p><input type="submit" name="submit" value="Update Score Board" /></p>
	</form>
	</div>
	<?php
}

function score_board_plugin_menu()
{
		add_settings_page('score-board-plugin','Score Board Options', 'Score Board Options', 'manage_options', 'score_board_settings', 'score_board_option_page');
}
add_action('admin_menu', 'score_board_plugin_menu');


  // Create and add Admin Page: WASEEM
 
 
