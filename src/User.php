<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/01/15
 * Time: 11:58
 */

namespace Cartman\Init;

/**
 * Class User
 * @package Cartman\Init
 *
 * @Entity
 * @Table(name="user")
 */

class User {

    /**
     * @var int
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="user", type="string", length=50, unique=true)
     */
    private $username;

    /**
     * @var $string
     *
     * @Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @return int
     */
    public function getID(){
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * @params string $user
     *
     * @return user
     *
     * @throws \Exception
     */
    public function setUsername($username){
        if (is_string($username))
            $this->username = $username;
        else
            throw new \Exception('User must be a string');


        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(){
        return $this->password;
    }

    /**
     * @params string $password
     *
     * @return user
     *
     * @throws \Exception
     */
    public function setPassword($password){
        if (is_string($password))
            $this->password = $password;
        else
            throw new \Exception('Password must be a string');


        return $this;
    }
} 