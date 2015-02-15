<html>
<head>
<title>Soundboard</title>
<link rel="icon" href="icon.png">
<style>

/*  SECTIONS  ============================================================================= */

.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  GROUPING  ============================================================================= */


.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1; /* For IE 6/7 (trigger hasLayout) */
}

/*  GRID COLUMN SETUP   ==================================================================== */

.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}

.col:first-child { margin-left: 0; } /* all browsers except IE6 and lower */


/*  REMOVE MARGINS AS ALL GO FULL WIDTH AT 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { 
		margin: 1% 0 1% 0%;
	}
}
</style>
<style>
/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 0%;
}
.col:first-child { margin-left: 0; }


/*  GROUPING  */
.group:before,
.group:after {
	content:"";
	display:table;
}
.group:after {
	clear:both;
}
                                               
					
/*  GRID OF FOUR  */
.span_4_of_4 {
	width: 100%;
}
.span_3_of_4 {
	width: 75%;
}
.span_2_of_4 {
	width: 50%;
}
.span_1_of_4 {
	width: 25%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { 
		margin: 1% 0 1% 0%;
	}
}

@media only screen and (max-width: 480px) {
	.span_4_of_4 {
		width: 100%; 
	}
	.span_3_of_4 {
		width: 100%; 
	}
	.span_2_of_4 {
		width: 100%; 
	}
	.span_1_of_4 {
		width: 100%;
	}
}
</style>
<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
<style>
body{
font-family: ‘Metrophobic’, Arial, serif; font-weight: 400; 
margin:0;}
#sound{
background:red;
height:20%;
color:white;
margin:0.5;
}
</style>

<script>
 function playSound(soundfile) {
    var player=document.getElementById('player');
    var sourceMp3=document.getElementById('mp3Source');

    sourceMp3.src=soundfile;
    
   player.load(); //just start buffering (preload)
   player.play(); //start playing"
 }
 </script>
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
</head>
<body>
<div class="section group">
<div class="col span_4_of_4" id="nav"><center><audio id="player" controls="controls">
    <source id="mp3Source" src="sound/doorbell.wav"></source>
    Your browser does not support the audio format.
</audio></center></div>
<b>
<?php 
$comma="'";
foreach (array_reverse(glob("sound/*.{mp3,wav}", GLOB_BRACE)) as $filename) {
    echo '<div class="col span_1_of_4" id="sound" onclick="playSound('.$comma.$filename.$comma.');">'.$filename.'</div>';
};
?>
</div>
</b>
</body>
</html>
