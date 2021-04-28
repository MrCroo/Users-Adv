<?php

class View extends Model {

    //Giving the one fetched user to the used page
    public function showUser($id) {
        $results = $this->getUser($id);
        return $results;
    }

    //Giving all users to the used page
    public function showAllUsers() {
        $results = $this->getUsers();
        return $results;
    }

    //Giving all advertisements to the used page
    public function showAllAdvs() {
        $results = $this->getAdvs();
        return $results;
    }
}