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

    ?>
</body>

</html>