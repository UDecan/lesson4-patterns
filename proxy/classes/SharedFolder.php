<?php


namespace App\proxy\classes;


use App\proxy\interfaces\SharedFolderInterface;

class SharedFolder implements SharedFolderInterface
{
    public function PerformRWOperations(): string
    {
        return "Получено разрешение на выполнение операций чтения-записи в общей папке\n";
    }
}