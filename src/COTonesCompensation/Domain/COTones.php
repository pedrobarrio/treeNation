<?php
declare(strict_types=1);

namespace App\COTonesCompensation\Domain;


use Ramsey\Uuid\Uuid;

class COTones
{
    public function __construct(
        private Uuid   $id,
        private string $year,
        private string $month,
        private string $numberOfTrees,
        private string $cotCompensation
    )
    {
    }

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getYear(): string
    {
        return $this->year;
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
