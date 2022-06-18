<?php
    class Person
    {
        private static $lastId = 0;

        private $id;
        private $firstName;
        private $lastName;
        private $email;

        public function __construct($id, $firstName, $lastName, $email)
        {
            if ($id = null) {
                $this->id = ++self::$lastId;
            } else {
                $this->id = $id;
                if ($id > self::$lastId) {
                    self::$lastId = $id;
                }
            }

            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
        }

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getLastName()
        {
            return $this->lastName;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public static function getLastId()
        {
            return self::$lastId;
        }
    }
    ?>