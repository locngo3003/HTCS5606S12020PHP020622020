<?php
/**
 * Class User
 * Author: Ngo Loc
 * version:
 */

class User
{
    public $id;
    private $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $name
     * @param $password
     */
    public function  __construct($id, $username, $name, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->name = $name;
        $this->password = $password;
    }
}