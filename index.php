<?php

$pageTitle = "MediTrack";

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

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-50 text-slate-900">

    <!-- Navbar -->
    <?php require_once __DIR__ . '/components/common/navbar.php'; ?>


    <!-- Hero Section -->
    <main>

        <section class="bg-white">

            <div class="max-w-7xl mx-auto px-6 py-20">

                <div class="max-w-3xl mx-auto text-center">

                    <span
                        class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold"
                    >
                        Simple Family Medication Reminder
                    </span>

                    <h1
                        class="mt-6 text-5xl md:text-6xl font-bold tracking-tight text-slate-900"
                    >
                        Keep your family's
                        <span class="text-blue-600">
                            medications organized.
                        </span>
                    </h1>

                    <p
                        class="mt-6 text-lg leading-8 text-slate-600"
                    >
                        MediTrack helps families keep medication information
                        organized with clear instructions based on each
                        medication type.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

                        <a
                            href="/MediTrack/pages/add-medication.php"
                            class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition"
                        >
                            Add Medication
                        </a>

                        <a
                            href="#how-it-works"
                            class="px-6 py-3 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-100 transition"
                        >
                            How It Works
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Features -->
        <section class="py-20">

            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center max-w-2xl mx-auto">

                    <p class="text-blue-600 font-semibold">
                        FEATURES
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-slate-900">
                        Simple tools for medication management
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Everything is designed to keep medication information
                        clear and easy to understand.
                    </p>

                </div>


                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">


                    <!-- Feature 1 -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200 p-8 hover:shadow-lg transition"
                    >

                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 text-xl font-bold"
                        >
                            +
                        </div>

                        <h3 class="mt-6 text-xl font-semibold">
                            Track Medications
                        </h3>

                        <p class="mt-3 text-slate-600 leading-7">
                            Add medication information and keep important
                            details organized in one place.
                        </p>

                    </div>


                    <!-- Feature 2 -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200 p-8 hover:shadow-lg transition"
                    >

                        <div
                            class="w-12 h-12 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600 text-xl font-bold"
                        >
                            ✓
                        </div>

                        <h3 class="mt-6 text-xl font-semibold">
                            Multiple Medication Types
                        </h3>

                        <p class="mt-3 text-slate-600 leading-7">
                            Choose between tablets, syrups, and injections
                            with type-specific information.
                        </p>

                    </div>


                    <!-- Feature 3 -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200 p-8 hover:shadow-lg transition"
                    >

                        <div
                            class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-xl font-bold"
                        >
                            i
                        </div>

                        <h3 class="mt-6 text-xl font-semibold">
                            Clear Instructions
                        </h3>

                        <p class="mt-3 text-slate-600 leading-7">
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
            class="py-20 bg-white border-y border-slate-200"
        >

            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center">

                    <p class="text-blue-600 font-semibold">
                        HOW IT WORKS
                    </p>

                    <h2 class="mt-2 text-3xl font-bold">
                        Three simple steps
                    </h2>

                </div>


                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">


                    <!-- Step 1 -->
                    <div class="text-center">

                        <div
                            class="mx-auto w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold"
                        >
                            1
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Add Medication
                        </h3>

                        <p class="mt-3 text-slate-600">
                            Enter the medication and family member information.
                        </p>

                    </div>


                    <!-- Step 2 -->
                    <div class="text-center">

                        <div
                            class="mx-auto w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold"
                        >
                            2
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Choose the Type
                        </h3>

                        <p class="mt-3 text-slate-600">
                            Select whether the medication is a tablet, syrup,
                            or injection.
                        </p>

                    </div>


                    <!-- Step 3 -->
                    <div class="text-center">

                        <div
                            class="mx-auto w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold"
                        >
                            3
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            View Instructions
                        </h3>

                        <p class="mt-3 text-slate-600">
                            MediTrack processes the information and displays
                            the appropriate result.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Call To Action -->
        <section class="py-20">

            <div class="max-w-4xl mx-auto px-6">

                <div
                    class="rounded-3xl bg-blue-600 px-8 py-12 text-center text-white"
                >

                    <h2 class="text-3xl font-bold">
                        Ready to organize your medications?
                    </h2>

                    <p class="mt-4 text-blue-100">
                        Add your first medication and see how MediTrack works.
                    </p>

                    <a
                        href="/MediTrack/pages/add-medication.php"
                        class="inline-block mt-8 px-6 py-3 rounded-lg bg-white text-blue-600 font-semibold hover:bg-blue-50 transition"
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