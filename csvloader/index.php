<?php

require_once("../db_defines.php");
@require_once "src/SimpleXLSX.php";

$xlsx = @(new SimpleXLSX('Data_set.xlsx'));
$data = $xlsx->rows();

$db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);

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

//create tables
for ($i = 0; $i < count($tables); $i++) {
    $tb = array_keys($tables)[$i];
    $q = "CREATE TABLE `" . _DB_NAME_ . "`.`" . $prefix . $tb . "` ( ";
    $q_s = ") ENGINE = InnoDB;";

    for ($j = 0; $j < count($tables[array_keys($tables)[$i]]) - 1; $j++) {
        $key_size = preg_split('/:/', array_keys($tables[array_keys($tables)[$i]])[$j]);

        $q .= "`" . $key_size[0] . "` char(" . $key_size[1] . ") NOT NULL ,";
    }

    $key_size = preg_split('/:/', array_keys($tables[array_keys($tables)[$i]])[count($tables[array_keys($tables)[$i]]) - 1]);

    $q .= "`" . $key_size[0] . "` char(" . $key_size[1] . ") NOT NULL ";
    $q .= $q_s;

    if (mysqli_query($db, $q)) echo $q . "<br>";
    else echo "Таблица не создана: " . mysqli_error($db);
}

mysqli_close($db);