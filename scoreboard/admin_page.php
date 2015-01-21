 <?php 
 
// Add Admin page Code here

function score_board_option_page()
{
	?>
	<div class="wrap"><?php screen_icon(); ?>
	<h2>Score Board Option Page</h2>
	<form action="options.php" method="post" id="score-board-options-form">
	<?php settings_fields('score_board_settings'); ?>
	<h3 align="left"><label for="score_title">Score Board Title: </label> <input
		type="text" id="score_board_title" name="score_board_title"
		value="<?php echo esc_attr( get_option('score_board_title') ); ?>" />
		<table border="0">
		<tr><h3><td></td><td>Team Name </td>
		<td>Team Points</td></h3></tr>
		<tr><h3><td><label for="score_board_team1_name">Team 1</label></td><td> <input
		type="text" id="score_board_team1_name" name="score_board_team1_name"
		value="<?php echo esc_attr( get_option('score_board_team1_name') ); ?>" /></td>
		<td><input type="text" id="score_board_team1_score" name="score_board_team1_score"
		value="<?php echo esc_attr( get_option('score_board_team1_score') ); ?>" />
		</td></h3></tr>
		<tr><h3><td><label for="score_board_team2_name">Team 2</label></td><td> <input
		type="text" id="score_board_team2_name" name="score_board_team2_name"
		value="<?php echo esc_attr( get_option('score_board_team2_name') ); ?>" /></td>
		<td><input type="text" id="score_board_team2_score" name="score_board_team2_score"
		value="<?php echo esc_attr( get_option('score_board_team2_score') ); ?>" />
		</td></h3></tr>
		<tr><h3><td><label for="score_board_team3_name">Team 3</label></td><td> <input
		type="text" id="score_board_team3_name" name="score_board_team3_name"
		value="<?php echo esc_attr( get_option('score_board_team3_name') ); ?>" /></td>
		<td><input type="text" id="score_board_team3_score" name="score_board_team3_score"
		value="<?php echo esc_attr( get_option('score_board_team3_score') ); ?>" />
		</td></h3></tr>
		<tr><h3><td><label for="score_board_team4_name">Team 4 </label></td><td> <input
		type="text" id="score_board_team4_name" name="score_board_team4_name"
		value="<?php echo esc_attr( get_option('score_board_team4_name') ); ?>" /></td>
		<td><input type="text" id="score_board_team4_score" name="score_board_team4_score"
		value="<?php echo esc_attr( get_option('score_board_team4_score') ); ?>" />
		</td></h3></tr></table>
	<p><input type="submit" name="submit" value="Update Score Board" /></p>
	</form>
	</div>
	<?php
}

function score_board_plugin_menu()
{
//add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);

add_options_page('Score Board Options', 'Score Board', 'manage_options', 'score-board-settings', 'score_board_option_page');
}
add_action('admin_menu', 'score_board_plugin_menu');


  // Create and add Admin Page: WASEEM
