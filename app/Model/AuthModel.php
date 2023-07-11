<?php

namespace App\Model;

use Nette\Database\Explorer;

class AuthModel
{

    /**
     * @var Explorer
     */
    private $database;
    public function __construct(Explorer $database)
    {
        $this->database = $database;
    }

    public function getName(string $name): string
    {
        
    }
}
