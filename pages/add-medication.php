<?php

require_once __DIR__ . '/../classes/MedicationFactory.php';

session_start();

$pageTitle = "Add Medication";

$errors = [];
$medication = null;

$patientName = "";
$medicationName = "";
$dosage = "";
$frequency = "";
$medicationType = "";
$notes = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $patientName = trim($_POST["patient_name"] ?? "");
    $medicationName = trim($_POST["medication_name"] ?? "");
    $dosage = trim($_POST["dosage"] ?? "");
    $frequency = trim($_POST["frequency"] ?? "");
    $medicationType = trim($_POST["medication_type"] ?? "");
    $notes = trim($_POST["notes"] ?? "");


    // Validate patient name
    if ($patientName === "") {
        $errors["patient_name"] = "Family member name is required.";
    }


    // Validate medication name
    if ($medicationName === "") {
        $errors["medication_name"] = "Medication name is required.";
    }


    // Validate dosage
    if ($dosage === "") {
        $errors["dosage"] = "Dosage is required.";
    }


    // Validate frequency
    $allowedFrequencies = [
        "Once daily",
        "Twice daily",
        "Three times daily",
        "As needed"
    ];

    if (!in_array($frequency, $allowedFrequencies, true)) {
        $errors["frequency"] = "Please select a valid frequency.";
    }


    // Validate medication type
    $allowedTypes = [
        "tablet",
        "syrup",
        "injection"
    ];

    if (!in_array($medicationType, $allowedTypes, true)) {
        $errors["medication_type"] = "Please select a valid medication type.";
    }


    // Create medication object if there are no errors
    if (empty($errors)) {

        try {

            $medication = MedicationFactory::createMedication(
                $medicationType,
                $patientName,
                $medicationName,
                $dosage,
                $frequency,
                $notes
            );

            $_SESSION['medications'][] = [
                'patient_name' => $medication->getPatientName(),
                'medication_name' => $medication->getMedicationName(),
                'dosage' => $medication->getDosage(),
                'frequency' => $medication->getFrequency(),
                'type' => $medication->getType(),
                'instructions' => $medication->getInstructions(),
                'notes' => $medication->getNotes(),
            ];

        } catch (InvalidArgumentException $e) {

            $errors["medication_type"] = $e->getMessage();

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle) ?> | MediTrack</title>

    <!-- Component Styles -->
    <link rel="stylesheet" href="../assets/styles/navbar.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <!-- Page Styles -->
    <link rel="stylesheet" href="../assets/styles/add-medication.css">
    <link rel="stylesheet" href="../assets/styles/medication-result.css">

</head>

<body>

    <!-- Navbar -->
    <?php require_once __DIR__ . '/../components/common/navbar.php'; ?>


    <main class="medication-page">

        <!-- Page Header -->
        <div class="page-header">

            <p class="page-label">
                MEDICATION INFORMATION
            </p>

            <h1>
                Add a Medication
            </h1>

            <p class="page-description">
                Enter the medication details below to get started.
            </p>

        </div>


        <!-- Medication Form -->
        <?php require_once __DIR__ . '/forms/medication-form.php'; ?>
        <!-- Medication Result -->
         <?php require_once __DIR__ . '/forms/medication-result.php'; ?>

    </main>


    <!-- Footer -->
    <?php require_once __DIR__ . '/../components/common/footer.php'; ?>


    <script src="../assets/js/app.js"></script>

</body>

</html>