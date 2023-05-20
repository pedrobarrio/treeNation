<?php
declare(strict_types=1);

namespace App\COTonesCompensation\Application\GetAnnualReport;

class GetAnnualReportResponse
{
    public function __construct(
        private string $year,
        private string $month,
        private string $minimumCOTonesExpected,
        private string $cotCompensation
    )
    {
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function getMinimumCOTonesExpected(): string
    {
        return $this->minimumCOTonesExpected;
    }

    public function getCotCompensation(): string
    {
        return $this->cotCompensation;
    }
}
