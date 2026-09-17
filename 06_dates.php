<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>LA funcio date()</h1>
<?php
echo "<h2> Formats de data </h2>";
$data = date("Y/m/d");
echo $data;
$data = date("Y/m/d H:i:s");
echo "<br>".$data;
?>
<h1>la funcio date amb timestamp</h1>
<?php
echo "<br>";
$now = time();
echo $now."<br>";
echo date("Y-m-d H:i:s", $now);
?>

    
</body>
</html>