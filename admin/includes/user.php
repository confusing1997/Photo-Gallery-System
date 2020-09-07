<?php


    class User {

        public static function find_all_users () {

            global $database;

            $result_set = $database->query("SELECT * FROM users");

            $result = array();

            while ($row = mysqli_fetch_assoc($result_set)) {

                $result[] = $row;

            }

            return $result;

        }

        public static function find_user_id ($id) {

            global $database;

            $result_set = $database->query("SELECT * FROM users WHERE id = $id LIMIT 1");

            $found_user = mysqli_fetch_assoc($result_set);

            return $found_user;

        }

    }