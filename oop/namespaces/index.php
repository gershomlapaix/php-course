<?php

use Html\Table;
use Html\Row;

include "web/html.php";
include "equipment/table.php";

$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;

// add namespace
$ft = new Furniture\Table("Wooden", "ABC", 25000);
?>


<html lang="en">

<head>
    <title>Namespaces</title>
</head>

<body>
    <!-- <?php $table->message(); ?>
    <?php $row->message(); ?>
    <?= $ft->calculateText(); ?> -->

</body>

</html>