<?php

// Site navigation shared by the main pages.
require_once __DIR__ . '/../../includes/config.php';

?>

<nav class="site-navbar">

    <div class="navbar-container">

        <!-- Logo -->
        <a href="<?= MEDTRACK_BASE_URL ?>/" class="navbar-logo">
            MediTrack
        </a>

        <!-- Navigation -->
        <div class="navbar-links">

            <a
                href="<?= MEDTRACK_BASE_URL ?>/"
                class="navbar-link"
            >
                Home
            </a>

            <a
                href="<?= MEDTRACK_BASE_URL ?>/pages/add-medication.php"
                class="navbar-link"
            >
                Add Medication
            </a>

        </div>

    </div>

</nav>
