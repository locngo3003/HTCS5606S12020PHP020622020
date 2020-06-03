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
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }


}