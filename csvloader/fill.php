<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require_once("../db_defines.php");
@require_once "src/SimpleXLSX.php";


$xlsx = @(new SimpleXLSX('Data_set.xlsx'));
$data = $xlsx->rows();

$db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);
$db->query("SET NAMES utf8");
$db->query("SET CHARACTER SET utf8");

for ($line = 2; $line < count($data); $line++) {
    for ($i = 0; $i < count($data[$line]); $i++) {
        // iconv("CP1251", 'utf-8//TRANSLIT', $data[$line][$i]);
    }
}


$prefix = "zoo_";

$tables = array();

//echo "<pre>" . json_encode($data[0], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre><br>";
//echo "<pre>" . json_encode($data[1], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre><br>";

for ($i = 1; $i < count($data[0]); $i++) {
    if ($data[0][$i] != "") {
        $tbname = $data[0][$i];
        $tables[$tbname]["animal_id:20"] = 0;
        $tables[$tbname][$data[1][$i]] = $i;
    } else if ($data[0][$i] == "") {
        $tables[$tbname][$data[1][$i]] = $i;
    }
}

echo "<pre>" . json_encode($tables, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre><br>";

for ($line = 2; $line < count($data); $line++) {
    for ($i = 0; $i < count($tables); $i++) {
        $tb = array_keys($tables)[$i];
        $q = "INSERT INTO`" . $prefix . "$tb`";
        $q_tables = "( ";
        $q_values = "VALUE ( ";

        for ($j = 0; $j < count($tables[array_keys($tables)[$i]]); $j++) {
            $q_tables .= preg_split('/:/', array_keys($tables[array_keys($tables)[$i]])[$j])[0] . " ,";
            $val = $data[$line][(int)$tables[array_keys($tables)[$i]][array_keys($tables[array_keys($tables)[$i]])[$j]]];
            if ($val == "")
                $val = "none";
            $q_values .= "'" . str_replace("'", "''", $val) . "' ,";
        }
        $q_tables[strlen($q_tables) - 1] = ")";
        $q_values[strlen($q_values) - 1] = ")";

        $q .= $q_tables . " " . $q_values . "";
        echo $q."<br>";
        //$q = iconv("windows-1251", 'utf-8//IGNORE', $q);
        echo $q;
        echo '<br><hr>';

        if ($db->query($q)) echo "<br>"; else echo "Таблица не создана: " . mysqli_error($db);
    }
}
mysqli_close($db);

?>

</body>
<html>
