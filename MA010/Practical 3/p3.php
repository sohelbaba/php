<?php

	$browser = array("FireFox","Internet Exploer","Opera","Google","Ninja","Dolphin");
	echo "<select>";
	foreach ($browser as $browser) {
		echo "<option name='$browser'>$browser</option>";
	}
	echo "</select>";
?>