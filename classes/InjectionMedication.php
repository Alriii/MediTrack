<?php

require_once __DIR__ . '/Medication.php';

class InjectionMedication extends Medication
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
        return "Injection";
    }

    public function getInstructions(): string
    {
        return "Injection medication should be administered according to the instructions provided by a qualified healthcare professional.";
    }
}