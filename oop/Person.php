<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
</head>

<body>
    <?php
    class Person
    {
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        /*
            how the class will react when it is treated like a string
        */
        public function __toString()
        {
            $result = $this->name . " is " . $this->age . " years old";

            return $result;
        }
    }

    $p = new Person("La paix", 20);
    echo $p;
    ?>
</body>

</html>