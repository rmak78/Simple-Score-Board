 <?php 
 
// Add Admin page Code here

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
		value="<?php echo esc_attr( get_option('score_board_team1_name') ); ?>" />
		<label for="score_board_team1_score">Team 1 Score: </label> <input
		type="text" id="score_board_team1_score" name="score_board_team1_score"
		value="<?php echo esc_attr( get_option('score_board_team1_score') ); ?>" />
		</h3>
		<h3><label for="score_board_team2_name">Team 2 Name: </label> <input
		type="text" id="score_board_team2_name" name="score_board_team2_name"
		value="<?php echo esc_attr( get_option('score_board_team2_name') ); ?>" />
		<label for="score_board_team2_score">Team 2 Score: </label> <input
		type="text" id="score_board_team2_score" name="score_board_team2_score"
		value="<?php echo esc_attr( get_option('score_board_team2_score') ); ?>" />
		</h3>
		<h3><label for="score_board_team3_name">Team 3 Name: </label> <input
		type="text" id="score_board_team3_name" name="score_board_team3_name"
		value="<?php echo esc_attr( get_option('score_board_team3_name') ); ?>" />
		<label for="score_board_team3_score">Team 3 Score: </label> <input
		type="text" id="score_board_team3_score" name="score_board_team3_score"
		value="<?php echo esc_attr( get_option('score_board_team3_score') ); ?>" />
		</h3>
		<h3><label for="score_board_team4_name">Team 4 Name: </label> <input
		type="text" id="score_board_team4_name" name="score_board_team4_name"
		value="<?php echo esc_attr( get_option('score_board_team4_name') ); ?>" />
		<label for="score_board_team4_score">Team 4 Score: </label> <input
		type="text" id="score_board_team4_score" name="score_board_team4_score"
		value="<?php echo esc_attr( get_option('score_board_team4_score') ); ?>" />
		</h3>
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
