<!-- Medication form. -->
<div class="medication-form-container">

    <form
        id="medicationForm"
        action=""
        method="POST"
        novalidate
    >

        <!-- Family Member -->
        <div class="form-group">

            <label for="patient_name">
                Family Member Name
            </label>

            <input
                type="text"
                id="patient_name"
                name="patient_name"
                placeholder="Enter family member name"
                maxlength="50"
                value="<?= htmlspecialchars($patientName) ?>"
            >

            <p id="patient_name_error" class="form-error">
                <?= htmlspecialchars($errors["patient_name"] ?? "") ?>
            </p>

        </div>


        <!-- Medication Name -->
        <div class="form-group">

            <label for="medication_name">
                Medication Name
            </label>

            <input
                type="text"
                id="medication_name"
                name="medication_name"
                placeholder="e.g. Paracetamol"
                maxlength="100"
                value="<?= htmlspecialchars($medicationName) ?>"
            >

            <p id="medication_name_error" class="form-error">
                <?= htmlspecialchars($errors["medication_name"] ?? "") ?>
            </p>

        </div>


        <!-- Dosage -->
        <div class="form-group">

            <label for="dosage">
                Dosage
            </label>

            <input
                type="text"
                id="dosage"
                name="dosage"
                placeholder="e.g. 500 mg"
                maxlength="50"
                value="<?= htmlspecialchars($dosage) ?>"
            >

            <p id="dosage_error" class="form-error">
                <?= htmlspecialchars($errors["dosage"] ?? "") ?>
            </p>

        </div>


        <!-- Frequency -->
        <div class="form-group">

            <label for="frequency">
                Frequency
            </label>

            <select
                id="frequency"
                name="frequency"
            >

                <option value="">
                    Select frequency
                </option>

                <option
                    value="Once daily"
                    <?= $frequency === "Once daily" ? "selected" : "" ?>
                >
                    Once daily
                </option>

                <option
                    value="Twice daily"
                    <?= $frequency === "Twice daily" ? "selected" : "" ?>
                >
                    Twice daily
                </option>

                <option
                    value="Three times daily"
                    <?= $frequency === "Three times daily" ? "selected" : "" ?>
                >
                    Three times daily
                </option>

                <option
                    value="As needed"
                    <?= $frequency === "As needed" ? "selected" : "" ?>
                >
                    As needed
                </option>

            </select>

            <p id="frequency_error" class="form-error">
                <?= htmlspecialchars($errors["frequency"] ?? "") ?>
            </p>

        </div>


        <!-- Medication Type -->
        <div class="form-group">

            <label for="medication_type">
                Medication Type
            </label>

            <select
                id="medication_type"
                name="medication_type"
            >

                <option value="">
                    Select medication type
                </option>

                <option
                    value="tablet"
                    <?= $medicationType === "tablet" ? "selected" : "" ?>
                >
                    Tablet
                </option>

                <option
                    value="syrup"
                    <?= $medicationType === "syrup" ? "selected" : "" ?>
                >
                    Syrup
                </option>

                <option
                    value="injection"
                    <?= $medicationType === "injection" ? "selected" : "" ?>
                >
                    Injection
                </option>

            </select>

            <p id="medication_type_error" class="form-error">
                <?= htmlspecialchars($errors["medication_type"] ?? "") ?>
            </p>

        </div>


        <!-- Type Information -->
        <div
            id="typeInformation"
            class="type-information"
        >

            <p id="typeInformationText"></p>

        </div>


        <!-- Notes -->
        <div class="form-group notes-group">

            <label for="notes">
                Notes
            </label>

            <textarea
                id="notes"
                name="notes"
                rows="4"
                maxlength="250"
                placeholder="Optional notes"
            ><?= htmlspecialchars($notes) ?></textarea>

            <div class="notes-footer">

                <p>
                    Optional
                </p>

                <p id="notesCounter">
                    <?= strlen($notes) ?> / 250
                </p>

            </div>

        </div>


        <!-- Submit -->
        <?php
        $buttonType = 'submit';
        $buttonLabel = 'Process Medication';
        $buttonClass = 'submit-button';
        require __DIR__ . '/button.php';
        ?>

    </form>

</div>
