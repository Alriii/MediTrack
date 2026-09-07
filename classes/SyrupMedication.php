<?php

require_once __DIR__ . '/Medication.php';

class SyrupMedication extends Medication
{
    public function __construct(
        string $patientName,
        string $medicationName,
        string $dosage,
        string $frequency,
        string $notes = ""
    ) {
        parent::__construct(
            $patientName,
            $medicationName,
            $dosage,
            $frequency,
            $notes
        );
    }

    public function getType(): string
    {
        return "Syrup";
    }

    public function getInstructions(): string
    {
        return "Measure the syrup carefully and take the prescribed amount according to the dosage and frequency.";
    }
}