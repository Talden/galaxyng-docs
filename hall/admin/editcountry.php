<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http//www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http//www.w3.org/1999/xhtml" xmllang="en-US">

<!-- $Id$ -->

	<head>
		<title>Galaxy Hall of Fame Administration</title>
		<link rel="stylesheet" href="admin.css" />
	</head>

	<body>
		<h1>Galaxy Hall of Fame Administration</h1>

<?php
// connect to the database and make galaxyng the current db
include '../galaxyng_db.php';
?>

<?php
// problem
if (!$id) {
	echo "<p>Select a <a href=\"index.php\">country</a> to edit.</p>";
// new country
} else if ($id=="new") {
	$insert=mysql_query("INSERT INTO country (name) VALUES ('$name')") or die("Problem updating " . mysql_error());
	echo "$name added.";
// edit country
} else {
	$update=mysql_query("UPDATE country SET name='$name' WHERE id='$id'") or die("Problem updating " . mysql_error());
	echo "$name updated.";
}
?>

<p><a href="index.php">Administration</a></p>

<?php
// disconnect from the database
	mysql_close($link);
?>
					
 	</body>
</html>
