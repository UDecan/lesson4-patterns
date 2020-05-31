<?php

namespace App\proxy\interfaces;

interface SharedFolderInterface
{
    public function PerformRWOperations(): string;
}