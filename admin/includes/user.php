<?php


    class User {

        public static function find_all_users () {

            return self::find_this_query("SELECT * FROM users");

        }

        public static function find_user_id ($id) {

            
            $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");

            $found_user = mysqli_fetch_assoc($result_set);

            return $found_user;

        }

        public static function find_this_query($sql) {

            global $database;

            $result_set = $database->query($sql);

            return $result_set;

        }

    }