
<?php
$score = $_GET["score"];
$scorex = explode(":", $score);
$highscore = $scorex[0];
?>
<html>
<head>
<title>score facebook desenvolvido pela heart soft studio</title>
<meta property="og:title" content="Highscore on Game is <?php echo $highscore;?>!"/>
<meta property="og:image" content="http://dactari.com.br/game_icon.png"/>
<meta property="og:site_name" content="Your company"/>
<meta property="og:description" content="<?php echo $highscore;?> is mine new highscore on Game! How far do you think you can get?"/>	
</head>
<body>
<meta http-equiv="refresh" content="0;URL=http://www.dactari.com.br" />
</body>
</html>
