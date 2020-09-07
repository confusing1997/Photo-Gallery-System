<?php


    class User {

        public $id;
        public $username;
        public $password;
        public $first_name;
        public $last_name;

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

        public static function instantiation($the_record) {

            $the_object = new self();

            // $the_object->id         = $result['id'];
            // $the_object->username   = $result['username'];
            // $the_object->password   = $result['password'];
            // $the_object->first_name = $result['first_name'];
            // $the_object->last_name  = $result['last_name'];

            foreach ($the_record as $the_attribute => $value) {

                if ($the_object->has_the_attribute($the_attribute)) {

                    $the_object->the_attribute = $value;

                }

            }

        }

    }