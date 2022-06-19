<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop</title>
</head>

<body>
    <?php

use Html\Row;
use Html\Table;

    include "Namespace.php";

    class Student
    {

        public function __construct()
        {
            echo "Object created";
        }

        public $firstName;

        function setFirstName($firstName)

        {
            $this->firstName = $firstName;

            echo "This is possible inside :" . $this->firstName . "<br/>";
        }
    }

    $std1 = new Student();
    $std1->setFirstName("La paix");

    $std2 = new Student();
    $std2->setFirstName(("Gersh"));

    echo "<br/> current time is " . (new DateTime())->format("M-D-Y");
    PHP_EOL;
    echo "current time is " . (new DateTime())->format("M-D-Y");

    // including staticPM

    require_once __DIR__ . '/staticPM.php';
    $p1 = new Person(108, "Marvin", "Kareem", "kareem@gmail.com");

    echo "<h1>Person's data</h1>";

    echo "Names : " . $p1->getFirstName() . " " . $p1->getLastName() . "<br/>";

    echo "Id : " . Person::getLastId() . "<br/>";

    $p2 = new Person(null, "Bon", "Yve", "bon@gmail.com");
    echo "\n\nNames : " . $p2->getFirstName() . " " . $p2->getLastName() . "<br/>";

    echo "Id : " . Person::getLastId() . "<br/>";


    // Namespaces

    echo "<br/> <h2>Namespaces</h1>";

    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Row();
    $row->numCells = 3;

    $table->message();
    ?>
</body>

</html>