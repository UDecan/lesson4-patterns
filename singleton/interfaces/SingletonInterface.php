<?php

namespace App\singleton\interfaces;

interface SingletonInterface
{
    /**
     * @return string
     */
    public function __toString(): string;

    /**
     * @return mixed
     */
    public static function getInstance();

    /**
     * @param string $message
     * @return string
     */
    public static function PrintDetails(string $message): string;

}