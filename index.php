<?php

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

use App\proxy\classes\Employee;
use App\proxy\classes\SharedFolderProxy;
use App\singleton\classes\Singleton;

//Singleton pattern (Одиночка)
echo Singleton::getInstance();
echo Singleton::getInstance() === Singleton::getInstance() ? "\nДанные верны!" : "\nКод работает неверно.";
echo "\n" . Singleton::getInstance(true);
echo "\n" . Singleton::getInstance(true) . "\n\n";


//Proxy pattern (Заместитель)
echo "Клиент передаёт данные для авторизации вместе с указанием своей должности 'Developer' в промежуточную общую папку.";
echo "\n" . (new SharedFolderProxy(new Employee("Anurag", "Anurag123", "Developer")))->PerformRWOperations() . "\n\n";

echo "Клиент передаёт данные для авторизации вместе с указанием своей должности 'Manager' в промежуточную общую папку.";
echo "\n" . (new SharedFolderProxy(new Employee("Pranaya", "Pranaya123", "Manager")))->PerformRWOperations() . "\n\n";


