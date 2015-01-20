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
		value="<?php echo esc_attr( get_option('score_board_team1_name') ); ?>" /></h3>
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
