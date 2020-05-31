<?php

namespace App\singleton\interfaces;

interface SingletonInterface
{
    public function __toString(): string;

    public static function getInstance();

    public static function PrintDetails(string $message): string;

}