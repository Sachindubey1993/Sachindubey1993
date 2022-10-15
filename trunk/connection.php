<?php
$mysqli = new mysqli("sql101.epizy.com","epiz_25621938","qJZLFKkJAiD","epiz_25621938_XXX");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{
	echo "Connected";
}
?>