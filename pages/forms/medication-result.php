<?php if ($medication !== null): ?>

    <!-- Medication Result -->
    <div class="medication-result">

        <div class="result-header">

            <p class="result-label">
                MEDICATION PROCESSED
            </p>

            <h2>
                Medication Information
            </h2>

        </div>


        <!-- Medication Details -->
        <div class="result-details">

            <div class="result-item">

                <span class="result-item-label">
                    Family Member
                </span>

                <span class="result-item-value">
                    <?= htmlspecialchars($medication->getPatientName()) ?>
                </span>

            </div>


            <div class="result-item">

                <span class="result-item-label">
                    Medication
                </span>

                <span class="result-item-value">
                    <?= htmlspecialchars($medication->getMedicationName()) ?>
                </span>

            </div>


            <div class="result-item">

                <span class="result-item-label">
                    Dosage
                </span>

                <span class="result-item-value">
                    <?= htmlspecialchars($medication->getDosage()) ?>
                </span>

            </div>


            <div class="result-item">

                <span class="result-item-label">
                    Frequency
                </span>

                <span class="result-item-value">
                    <?= htmlspecialchars($medication->getFrequency()) ?>
                </span>

            </div>


            <div class="result-item">

                <span class="result-item-label">
                    Medication Type
                </span>

                <span class="result-item-value">
                    <?= htmlspecialchars($medication->getType()) ?>
                </span>

            </div>

        </div>


        <!-- Instructions -->
        <div class="result-instructions">

            <p class="result-item-label">
                Instructions
            </p>

            <p>
                <?= htmlspecialchars($medication->getInstructions()) ?>
            </p>

        </div>


        <!-- Notes -->
        <?php if ($medication->getNotes() !== ""): ?>

            <div class="result-notes">

                <p class="result-item-label">
                    Notes
                </p>

                <p>
                    <?= htmlspecialchars($medication->getNotes()) ?>
                </p>

            </div>

        <?php endif; ?>

    </div>

<?php endif; ?>