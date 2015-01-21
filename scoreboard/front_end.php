<?php
// Frontend code comes here
function show_score_board() {
	$score_board = "
body {
	font-family: Comic Sans MS, cursive, sans-serif;
	color: white;
}
.container {
	width: 390px;
	height: 350px;
	position: absolute;
	bottom: 0px;
	right: 50px;
	transition: all .5s linear;
	-webkit-transition: all .5s linear;
	-moz-transition: all .5s linear;
	-o-transition: all .5s linear;
	overflow: hidden;
	height: 85px;
}
.container:hover {
	height: 290px;
}
.banner {
	width: 250px;
	height: 40px;
	z-index: 5;
	line-height: 200px;
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	-webkit-box-shadow: 0 1px 0 #fff inset;
	-moz-box-shadow: 0 1px 0 #fff inset;
	-ms-box-shadow: 0 1px 0 #fff inset;
	-o-box-shadow: 0 1px 0 #fff inset;
	box-shadow: 0 1px 0 #fff inset;
	border: 1px solid #c4c6ca;
	margin: 5px auto;
	padding: 25px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
}

.banner span {
	display: inline-block;
	vertical-align: middle;
	line-height: normal;
	font-size: 16px;
	font-weight: bold;
}

.banner:after,
.banner:before {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	border: 1px solid #c4c6ca;
	content: "";
	display: block;
	height: 100%;
	left: -1px;
	position: absolute;
	width: 100%;
}
.banner:after {
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
	top: 0;
	z-index: -1;
	-webkit-box-shadow: 0 8px 6px -6px black;
	-moz-box-shadow: 0 8px 6px -6px black;
	box-shadow: 0 8px 6px -6px black;
}
.banner:before {
	-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	-o-transform: rotate(-3deg);
	transform: rotate(-3deg);
	top: 0;
	z-index: -2;
	-webkit-box-shadow: 0 -8px 6px -6px black;
	-moz-box-shadow: 0 -8px 6px -6px black;
	box-shadow: 0 -8px 6px -6px black;
}

.board-container {
	width: 370px;
	height: 240px;
	background: #5C1F00;
	position: relative;
	top: -35px;
	z-index: 2;
	padding: 5px;
	margin: 5px auto;
}
.board-1 {
	width: 80px;
	height: 200px;
	background-color: #1975FF;
	display: inline-block;
	float: left;
	margin-left: 10px;
	margin-top: 50px;
}

.board-2 {
	width: 80px;
	height: 200px;
	background-color: #FF9900;
	display: inline-block;
	float: left;
	margin-left: 10px;
	margin-top: 50px;
}

.board-3 {
	width: 80px;
	height: 200px;
	background-color: #92E228;
	display: inline-block;
	float: left;
	margin-left: 10px;
	margin-top: 50px;
}

.board-4 {
	width: 80px;
	height: 200px;
	background-color: #FF0000;
	display: inline-block;
	float: left;
	margin-left: 10px;
	margin-top: 50px;
	margin-right: 10px;
}

#team-name{	
	transform: rotate(90deg);
	height: 50px;
	text-align: center;
	vertical-align: middle;
	width: 100px;
	margin-top: 50%;
	margin-left: -14px;
}
	
#team-score{
	font-size: 22px;
	margin-top: 50px;
    text-align: center;
}	
</style>

<div class='container'>

<div class='banner'>
<span>
<span style='color: #4573D4;'>House&nbsp;</span>
<span style='color: #FF9900;'>Points&nbsp;</span>
<span style='color: #92E228;'>Score&nbsp;</span>
<span style='color: #FF0000;'>Board</span>
</span>
</div>

<div class='board-container'>

<div class='board-1'>
	<div id='team-name'>
	<p>".esc_attr( get_option('score_board_team1_name') )."</p>
	</div>
	<div id='team-score'>
	<p><b>".esc_attr( get_option('score_board_team1_score') )."</b></p>
	</div>
</div>

<div class='board-2'>
	<div id='team-name'>
	<p>".esc_attr( get_option('score_board_team2_name') )."</p>
	</div>
	<div id='team-score'>
	<p><b>".esc_attr( get_option('score_board_team2_score') )."</b></p>
	</div>
</div>

<div class='board-3'>
	<div id='team-name'>
	<p>".esc_attr( get_option('score_board_team3_name') )."</p>
	</div>
	<div id='team-score'>
	<p><b>".esc_attr( get_option('score_board_team3_score') )."</b></p>
	</div>
</div>

<div class='board-4'>
	<div id='team-name'>
	<p>".esc_attr( get_option('score_board_team4_name') )."</p>
	</div>
	<div id='team-score'>
	<p><b>".esc_attr( get_option('score_board_team4_score') )."</b></p>
	</div>
</div>

</div>

</div>
	";
	echo $score_board;
}
add_action('wp_footer','show_score_board');
