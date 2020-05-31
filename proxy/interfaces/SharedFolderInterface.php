<?php

namespace App\proxy\interfaces;

interface SharedFolderInterface
{
    /**
     * @return string
     */
    public function PerformRWOperations(): string;
}