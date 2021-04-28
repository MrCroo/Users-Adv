<?php

class Controller extends Model {

    //Sending the user's name to the model
    public function createUser($username) {
        $this->setUser($username);
    }

    //Sending the advertisement's name to the model
    public function createAdv($user_id, $title) {
        $this->setAdv($user_id, $title);
    }

}