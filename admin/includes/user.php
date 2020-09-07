<?php


    class User {

        public function find_all_user () {

            global $database;

            $result_set = $database->query("SELECT * FROM users");

            return $result_set;

        }

    }