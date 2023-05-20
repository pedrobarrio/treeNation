<?php
declare(strict_types=1);

namespace App\COTonesCompensation\Application\GetAnnualReport;

class GetAnnualReportRequest
{
    public function __construct(
        private string $year,
        private string $minCOTonesExpected
    )
    {
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getMinCOTonesExpected(): string
    {
        return $this->minCOTonesExpected;
    }

}
