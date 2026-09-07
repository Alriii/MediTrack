<?php

require_once __DIR__ . '/Medication.php';

class TabletMedication extends Medication
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
        return "Tablet";
    }

    public function getInstructions(): string
    {
        return "Take the tablet with water according to the prescribed dosage and frequency.";
    }
}