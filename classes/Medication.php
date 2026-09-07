<?php

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

    public function getMedicationName(): string
    {
        return $this->medicationName;
    }

    public function getPatientName(): string
    {
        return $this->patientName;
    }

    public function getDosage(): string
    {
        return $this->dosage;
    }

    public function getFrequency(): string
    {
        return $this->frequency;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function getInstructions(): string
    {
        return "Follow the medication instructions provided by your healthcare professional.";
    }

    public function getType(): string
    {
        return "General Medication";
    }
}