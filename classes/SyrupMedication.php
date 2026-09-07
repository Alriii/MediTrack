<?php

require_once __DIR__ . '/Medication.php';

// Syrup version of a medication.
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

    // Display the selected type.
    public function getType(): string
    {
        return "Syrup";
    }

    // Syrup instructions.
    public function getInstructions(): string
    {
        return "Measure the syrup carefully and take the prescribed amount according to the dosage and frequency.";
    }
}