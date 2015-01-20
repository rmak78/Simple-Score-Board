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
 
include_once('front_end.php');
include_once('admin_page.php');
 
 
 
