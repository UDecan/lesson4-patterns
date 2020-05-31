<?php

namespace App\proxy\classes;

class Employee
{
    protected string $Username;
    protected string $Password;
    protected string $Role;

    /**
     * Employee constructor.
     * @param string $Username
     * @param string $Password
     * @param string $Role
     */
    public function __construct(string $Username, string $Password, string $Role)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     */
    public function setUsername(string $Username): void
    {
        $this->Username = $Username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     */
    public function setPassword(string $Password): void
    {
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * @param string $Role
     */
    public function setRole(string $Role): void
    {
        $this->Role = $Role;
    }
}