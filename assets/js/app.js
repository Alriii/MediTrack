document.addEventListener("DOMContentLoaded", function () {

    const medicationType = document.getElementById("medication_type");
    const typeInformation = document.getElementById("typeInformation");
    const typeInformationText = document.getElementById("typeInformationText");

    const notes = document.getElementById("notes");
    const notesCounter = document.getElementById("notesCounter");

    const medicationForm = document.getElementById("medicationForm");

    /*
     * Medication Type Information
     */

    if (medicationType && typeInformation && typeInformationText) {

        medicationType.addEventListener("change", function () {

            const selectedType = medicationType.value;

            let message = "";

            if (selectedType === "tablet") {

                message = "Tablets are solid medications that are usually taken with water.";

            } else if (selectedType === "syrup") {

                message = "Syrups are liquid medications that should be measured carefully.";

            } else if (selectedType === "injection") {

                message = "Injection medication should be administered according to professional instructions.";

            }

            if (message !== "") {

                typeInformationText.textContent = message;
                typeInformation.style.display = "block";

            } else {

                typeInformationText.textContent = "";
                typeInformation.style.display = "none";

            }

        });

    }

    /*
     * Notes Character Counter
     */

    if (notes && notesCounter) {

        notes.addEventListener("input", function () {

            notesCounter.textContent = notes.value.length + " / 250";

        });

    }

    /*
     * Client-Side Form Validation
     */

    if (medicationForm) {

        medicationForm.addEventListener("submit", function (event) {

            let isValid = true;

            const patientName = document.getElementById("patient_name");
            const medicationName = document.getElementById("medication_name");
            const dosage = document.getElementById("dosage");
            const frequency = document.getElementById("frequency");
            const medicationTypeField = document.getElementById("medication_type");

            clearErrors();

            if (patientName.value.trim() === "") {

                showError(
                    "patient_name",
                    "Family member name is required."
                );

                isValid = false;

            }

            if (medicationName.value.trim() === "") {

                showError(
                    "medication_name",
                    "Medication name is required."
                );

                isValid = false;

            }

            if (dosage.value.trim() === "") {

                showError(
                    "dosage",
                    "Dosage is required."
                );

                isValid = false;

            }

            if (frequency.value === "") {

                showError(
                    "frequency",
                    "Please select a frequency."
                );

                isValid = false;

            }

            if (medicationTypeField.value === "") {

                showError(
                    "medication_type",
                    "Please select a medication type."
                );

                isValid = false;

            }

            if (!isValid) {

                event.preventDefault();

            }

        });

    }

    /*
     * Show Validation Error
     */

    function showError(fieldId, message) {

        const errorElement = document.getElementById(
            fieldId + "_error"
        );

        if (errorElement) {

            errorElement.textContent = message;

        }

    }

    /*
     * Clear Validation Errors
     */

    function clearErrors() {

        const errorElements = document.querySelectorAll(".form-error");

        errorElements.forEach(function (errorElement) {

            errorElement.textContent = "";

        });

    }

});