<?php
// Frontend code comes here
function show_score_board() {
	$score_board = "
	<style type='text/css'>
#score-board-container {
	width: 350px;
	height: 75px;
	position: fixed;
	bottom: 0px;
	right: 49px;
	z-index: 100;
}

#score-board-container:hover {
	height: 200px;
}

#banner {
	border: 1px solid;
	margin: 0px auto;
	width: 70%;
	background-color: white;
	z-index: 1;
	position: relative;
	margin-bottom: -10px;
	text-align: center;
}

#team-board {
	background-color:#900;
	height:inherit;
}

#team-1 {
	background-color: blue;
}

#team-2 {
	background-color:orange;
}

#team-3 {
	background-color:#6EE670;
}

#team-4 {
	background-color:red;
}

.team{
	display: inline-block;
	height: inherit;
	width: 62px;
	margin-top: 29px;
	margin-left: 15px;
	color: #FFF;
	}
	
#team-name{	
	transform: rotate(90deg);
	overflow: auto;
	height: 80px;
	text-align: center;
	}
	
#team-score{
	bottom:0;
    text-align: center;
    padding: 18px;
	}
	
</style>

<div id='score-board-container'>
	<div id='content'>
    <p> House point scores board</p>
     </div>
    <div id='team-board'>
    	<div class='team' id='team-1'>
        	<div id='team-name'>
       	 		<p>".esc_attr( get_option('score_board_team1_name') )."</p>
            </div>
            <div id='team-score'>
       	 		<p><b><?php echo esc_attr( get_option('score_board_team1_score') ); ?></b></p>
            </div>
    	</div>
        <div class='team' id='team-2'>
        	<div id='team-name'>
       	 		<p><?php echo esc_attr( get_option('score_board_team2_name') ); ?></p>
            </div>
            <div id='team-score'>
       	 		<p><b><?php echo esc_attr( get_option('score_board_team2_score') ); ?></b></p>
            </div>
    	</div>
        <div class='team' id='team-3'>
        	<div id='team-name'>
       	 		<p><?php echo esc_attr( get_option('score_board_team3_name') ); ?></p>
            </div>
            <div id='team-score'>
       	 		<p><b><?php echo esc_attr( get_option('score_board_team3_score') ); ?></b></p>
            </div>
    	</div>
        <div class='team' id='team-4'>
        	<div id='team-name'>
       	 		<p><?php echo esc_attr( get_option('score_board_team4_name') ); ?></p>
            </div>
            <div id='team-score'>
       	 		<p><b><?php echo esc_attr( get_option('score_board_team4_score') ); ?></b></p>
            </div>
         </div>

    </div>
    
</div>
	";
	echo $score_board;
}
add_action('wp_footer','show_score_board');
