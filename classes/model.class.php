<?php

class Model extends Db {

    //Getting one user by it's id
    protected function getUser($id) {
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetch();
        return $results;
    }

    //Geting all users from database
    protected function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($results = $stmt->fetchAll()) {
            return $results;
        }
    }

    //Adding new user to database
    protected function setUser($username) {
        $sql = "INSERT INTO users(name) VALUES(?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
    }

    //Geting all advertisements from database
    protected function getAdvs() {
        $sql = "SELECT * FROM advertisements";
        $stmt = $this->connect()->query($sql);
        while($results = $stmt->fetchAll()) {
            return $results;
        }
    }

    //Adding new advertisement to database
    protected function setAdv($user_id, $title) {
        $sql = "INSERT INTO advertisements(user_id, title) VALUES(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $title]);
    }
}