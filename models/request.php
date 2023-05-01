<?php
    class Request {
        public $id;
        public $name;
        public $email;
        public $description;

        public function __construct($id, $name, $email, $description) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->description = $description;
        }

    }
?>