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
    $p1 = new Person(null, "Marvin", "Kareem", "kareem@gmail.com");

    echo "<h1>Person's data</h1>";

    echo "Names : ".$p1->getFirstName(). " " .$p1->getLastName()."<br/>";

    echo "Id : ".$p1->getLastId()."<br/>";

    ?>
</body>

</html>