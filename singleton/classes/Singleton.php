<?php

namespace App\singleton\classes;

use App\singleton\interfaces\SingletonInterface;

class Singleton implements SingletonInterface
{
    /**
     * @var int
     */
    protected static int $counter = 0;

    /**
     * @var Singleton|null
     */
    protected static ?Singleton  $instance = null;

    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
        self::$counter++;
    }

    /**
     * @param bool $flag
     * @return Singleton|null
     */
    public static function getInstance(bool $flag = false): ?Singleton
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        if ($flag){
            self::$counter++;
        }
        return self::$instance;
    }

    /**
     * @param string $message
     * @return string
     */
    public static function PrintDetails(string $message): string
    {
        return $message . self::$counter;
    }

    /**
     * @throws \Exception
     */
    public function __wakeup(){
        throw new \Exception("Невозможно в текущей архитектуре.");
    }

    /**
     * @throws \Exception
     */
    protected function __clone(){
        throw new \Exception("Невозможно в текущей архитектуре.");
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Человек купил автомобиль.\nВсего автомобилей у человека: " . self::$counter;
    }

}