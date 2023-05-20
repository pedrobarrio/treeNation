<?php
declare(strict_types=1);

namespace App\COTonesCompensation\Domain;

class COTones
{
    public function __construct(private Uuid $id, private string $month, private string $numberOfTrees, private string $cotCompensation)
    {
    }

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function getNumberOfTrees(): string
    {
        return $this->numberOfTrees;
    }

    public function getCotCompensation(): string
    {
        return $this->cotCompensation;
    }
}
