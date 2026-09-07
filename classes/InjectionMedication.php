<?php

require_once __DIR__ . '/Medication.php';

// Injection version of a medication.
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

    // Display the selected type.
    public function getType(): string
    {
        return "Injection";
    }

    // Injection instructions.
    public function getInstructions(): string
    {
        return "Injection medication should be administered according to the instructions provided by a qualified healthcare professional.";
    }
}