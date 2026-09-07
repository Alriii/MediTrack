<?php

session_start();

$pageTitle = "MediTrack";
$savedMedications = $_SESSION['medications'] ?? [];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- Page and component styles -->
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">

</head>

<body>

    <!-- Navbar -->
    <?php require_once __DIR__ . '/components/common/navbar.php'; ?>


    <!-- Hero Section -->
    <main>

        <section class="hero-section">

            <div class="container">

                <div class="hero-content">

                    <span class="hero-badge">
                        Simple Family Medication Reminder
                    </span>

                    <h1 class="hero-title">
                        Keep your family's
                        <span>medications organized.</span>
                    </h1>

                    <p class="hero-description">
                        MediTrack helps families keep medication information
                        organized with clear instructions based on each
                        medication type.
                    </p>

                    <div class="hero-buttons">

                        <a
                            href="/MediTrack/pages/add-medication.php"
                            class="button button-primary"
                        >
                            Add Medication
                        </a>

                        <a
                            href="#how-it-works"
                            class="button button-secondary"
                        >
                            How It Works
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Saved Medications -->
        <?php if ($savedMedications !== []): ?>

            <section class="saved-medications-section">

                <div class="container">

                    <div class="section-heading">

                        <p class="section-label">SAVED MEDICATIONS</p>

                        <h2>Your medication list</h2>

                        <p>Saved medications remain available during this browser session.</p>

                    </div>

                    <div class="saved-medications-list">

                        <?php foreach ($savedMedications as $savedMedication): ?>

                            <article class="saved-medication-card">

                                <div>
                                    <p class="saved-medication-type">
                                        <?= htmlspecialchars($savedMedication['type']) ?>
                                    </p>
                                    <h3>
                                        <?= htmlspecialchars($savedMedication['medication_name']) ?>
                                    </h3>
                                    <p>
                                        For <?= htmlspecialchars($savedMedication['patient_name']) ?>
                                    </p>
                                </div>

                                <dl class="saved-medication-details">
                                    <div>
                                        <dt>Dosage</dt>
                                        <dd><?= htmlspecialchars($savedMedication['dosage']) ?></dd>
                                    </div>
                                    <div>
                                        <dt>Frequency</dt>
                                        <dd><?= htmlspecialchars($savedMedication['frequency']) ?></dd>
                                    </div>
                                </dl>

                            </article>

                        <?php endforeach; ?>

                    </div>

                </div>

            </section>

        <?php endif; ?>


        <!-- Features -->
        <section class="features-section">

            <div class="container">

                <div class="section-heading">

                    <p class="section-label">
                        FEATURES
                    </p>

                    <h2>
                        Simple tools for medication management
                    </h2>

                    <p>
                        Everything is designed to keep medication information
                        clear and easy to understand.
                    </p>

                </div>


                <div class="feature-grid">


                    <!-- Feature 1 -->
                    <div class="feature-card">

                        <div class="feature-icon feature-icon-blue">
                            +
                        </div>

                        <h3>
                            Track Medications
                        </h3>

                        <p>
                            Add medication information and keep important
                            details organized in one place.
                        </p>

                    </div>


                    <!-- Feature 2 -->
                    <div class="feature-card">

                        <div class="feature-icon feature-icon-teal">
                            ✓
                        </div>

                        <h3>
                            Multiple Medication Types
                        </h3>

                        <p>
                            Choose between tablets, syrups, and injections
                            with type-specific information.
                        </p>

                    </div>


                    <!-- Feature 3 -->
                    <div class="feature-card">

                        <div class="feature-icon feature-icon-indigo">
                            i
                        </div>

                        <h3>
                            Clear Instructions
                        </h3>

                        <p>
                            View instructions appropriate for the selected
                            medication type.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- How It Works -->
        <section
            id="how-it-works"
            class="how-it-works-section"
        >

            <div class="container">

                <div class="section-heading">

                    <p class="section-label">
                        HOW IT WORKS
                    </p>

                    <h2>
                        Three simple steps
                    </h2>

                </div>


                <div class="steps-grid">


                    <!-- Step 1 -->
                    <div class="step">

                        <div class="step-number">
                            1
                        </div>

                        <h3>
                            Add Medication
                        </h3>

                        <p>
                            Enter the medication and family member information.
                        </p>

                    </div>


                    <!-- Step 2 -->
                    <div class="step">

                        <div class="step-number">
                            2
                        </div>

                        <h3>
                            Choose the Type
                        </h3>

                        <p>
                            Select whether the medication is a tablet, syrup,
                            or injection.
                        </p>

                    </div>


                    <!-- Step 3 -->
                    <div class="step">

                        <div class="step-number">
                            3
                        </div>

                        <h3>
                            View Instructions
                        </h3>

                        <p>
                            MediTrack processes the information and displays
                            the appropriate result.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Call To Action -->
        <section class="cta-section">

            <div class="container cta-container">

                <div class="cta-box">

                    <h2>
                        Ready to organize your medications?
                    </h2>

                    <p>
                        Add your first medication and see how MediTrack works.
                    </p>

                    <a
                        href="/MediTrack/pages/add-medication.php"
                        class="button cta-button"
                    >
                        Get Started
                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <?php require_once __DIR__ . '/components/common/footer.php'; ?>

</body>

</html>