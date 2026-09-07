<?php

require_once __DIR__ . '/TabletMedication.php';
require_once __DIR__ . '/SyrupMedication.php';
require_once __DIR__ . '/InjectionMedication.php';

class MedicationFactory
{
    public static function createMedication(
        string $type,
        string $patientName,
        string $medicationName,
        string $dosage,
        string $frequency,
        string $notes = ""
    ): Medication {

        switch ($type) {

            case "tablet":
                return new TabletMedication(
                    $patientName,
                    $medicationName,
                    $dosage,
                    $frequency,
                    $notes
                );

            case "syrup":
                return new SyrupMedication(
                    $patientName,
                    $medicationName,
                    $dosage,
                    $frequency,
                    $notes
                );

            case "injection":
                return new InjectionMedication(
                    $patientName,
                    $medicationName,
                    $dosage,
                    $frequency,
                    $notes
                );

            default:
                throw new InvalidArgumentException(
                    "Invalid medication type."
                );
        }
    }
}