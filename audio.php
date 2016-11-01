<iframe src="http://www.youtube.com/embed/<?php if (isset($_GET['yt'])) {echo $_GET['yt'];} else { echo 'vZyenjZseXA';} ?>?autoplay=<?php if (isset($_GET['play'])) {echo $_GET['play']; 
} else {echo '0';
}?>"  frameborder="0" allowfullscreen width="0" height="0"></iframe>
<a href="audio.php?yt=<?php if (isset($_GET['yt'])) {echo $_GET['yt'];} else { echo 'vZyenjZseXA';} ?>&play=1">Play</a>
<a href="audio.php?yt=<?php if (isset($_GET['yt'])) {echo $_GET['yt'];} else { echo 'vZyenjZseXA';} ?>">Stop</a>

<h3>New Video:</h3>
<form action="getplay.php">
<h3>YT Video ID:</h3>
<h4>http://www.youtube.com/watch?v="VIDEO ID"</h4>
<input type="text" name ="yt" value="Video ID">
<input type="submit" value="Play!">
</form>