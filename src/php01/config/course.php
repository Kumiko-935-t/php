<?php
$team = htmlspecialchars($_GET['team'], ENT_QUOTES);
print "所属チームは" . $team . "ですね！";
