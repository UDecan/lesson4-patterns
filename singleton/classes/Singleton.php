<?php

namespace App\singleton\classes;

use App\singleton\interfaces\SingletonInterface;

class Singleton implements SingletonInterface
{
    protected static int $counter = 0;
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
    public function __wakeup()
    {
        throw new \Exception("Невозможно в текущей архитектуре.");
    }

    public function __toString(): string
    {
        return "Человек купил автомобиль.\nВсего автомобилей у человека: " . self::$counter;
    }

}