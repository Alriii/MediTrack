<?php

// Shared medication data and default behavior.
class Medication
{
    protected string $patientName;
    protected string $medicationName;
    protected string $dosage;
    protected string $frequency;
    protected string $notes;

    public function __construct(
        string $patientName,
        string $medicationName,
        string $dosage,
        string $frequency,
        string $notes = ""
    ) {
        $this->patientName = $patientName;
        $this->medicationName = $medicationName;
        $this->dosage = $dosage;
        $this->frequency = $frequency;
        $this->notes = $notes;
    }

    // Medication name.
    public function getMedicationName(): string
    {
        return $this->medicationName;
    }

    // Family member name.
    public function getPatientName(): string
    {
        return $this->patientName;
    }

    // Dosage.
    public function getDosage(): string
    {
        return $this->dosage;
    }

    // Schedule.
    public function getFrequency(): string
    {
        return $this->frequency;
    }

    // Optional notes.
    public function getNotes(): string
    {
        return $this->notes;
    }

    // Fallback instructions for an unspecified type.
    public function getInstructions(): string
    {
        return "Follow the medication instructions provided by your healthcare professional.";
    }

    // Fallback type label.
    public function getType(): string
    {
        return "General Medication";
    }
}