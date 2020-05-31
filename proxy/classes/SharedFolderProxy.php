<?php


namespace App\proxy\classes;


use App\proxy\interfaces\SharedFolderInterface;

class SharedFolderProxy implements SharedFolderInterface
{
    /**
     * @var SharedFolderInterface
     */
    protected SharedFolderInterface $folder;

    /**
     * @var Employee
     */
    protected Employee $employee;

    /**
     * SharedFolderProxy constructor.
     */
    public function __construct(Employee $emp)
    {
        $this->employee = $emp;
    }

    /**
     * @return string
     */
    public function PerformRWOperations(): string
    {
        if (strtoupper($this->employee->getRole()) == "CEO" || strtoupper($this->employee->getRole()) == "MANAGER") {
            return (new SharedFolder())->PerformRWOperations() . "Общая промежуточная папка делает вызов метода 'PerformRWOperations' у основной папки";
        }
        else {
            return "Получен ответ: У вас нет прав доступа к этой папке";
        }
    }
}