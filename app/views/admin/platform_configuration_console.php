<?php
session_start();
require_once("../../../core/connection.php");
$title = "Platform Settings - EcoPortal Admin";
$activePage = "Settings";
require_once("../../models/PlatformSettingsModel.php");
require_once("../components/AdminHead.php");
$platformSettingsModel = new PlatformSettingsModel($connect);
$platformSettings = $platformSettingsModel->getPlatformSettings();
?>

<body class="bg-background text-on-background antialiased flex h-screen overflow-hidden">
    <?php require_once("../components/AdminSideBar.php"); ?>
    <main class="flex-1 flex flex-col md:ml-64 h-full">
        <div class="flex-1 overflow-y-auto pt-16 bg-surface p-6 md:p-8 lg:p-12">
            <div class="max-w-5xl mx-auto space-y-12">
                <form onsubmit="validateForm(event)" action="../../controllers/ConfigController.php" method="POST">
                    <div class="mb-8">
                        <h2 class="font-headline text-3xl font-extrabold text-on-surface tracking-tight mb-2">
                            Global Configuration
                        </h2>
                        <p class="font-body text-on-surface-variant text-sm">
                            Manage core platform mechanics, fee structures, and sustainability algorithms.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div
                            class="col-span-1 lg:col-span-2 bg-surface-container-lowest border-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] p-8">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-primary bg-primary/10 p-2">payments</span>
                                <h3 class="font-headline text-xl font-bold text-on-surface">Financial Parameters</h3>
                            </div>
                            <div class="space-y-8">
                                <div id="input-1">
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Base Platform Commission (%)
                                    </label>
                                    <input name="platform_fee_percent"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["platform_fee_percent"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors">
                                    </div>
                                </div>
                                <div id="input-2">
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Sustainability Contribution (%)
                                    </label>
                                    <input name="sustainability_contribution"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["sustainability_contribution"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors"></div>
                                </div>
                                <div id="input-3">
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Local Tax Percent (%)
                                    </label>
                                    <input name="local_tax_percent"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["local_tax_percent"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-1 bg-surface-container-lowest border-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] p-8 h-fit">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-primary bg-primary/10 p-2">eco</span>
                                <h3 class="font-headline text-xl font-bold text-on-surface">Eco-Leaf Weights</h3>
                            </div>
                            <div class="space-y-5">
                                <div id="input-4">
                                    <label class="font-label text-sm font-medium text-on-surface">Carbon Offset
                                        (%)</label>
                                    <input name="carbon_footprint"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number" value="<?php echo $platformSettings["carbon_footprint"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors"></div>
                                </div>
                                <div id="input-5">
                                    <label class="font-label text-sm font-medium text-on-surface">Local Economy Support
                                        (%)</label>
                                    <input name="local_economy_support"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number"
                                        value="<?php echo $platformSettings["local_economy_support"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors">
                                    </div>
                                </div>
                                <div id="input-6">
                                    <label class="font-label text-sm font-medium text-on-surface">Wildlife Protection
                                        (%)</label>
                                    <input name="wildlife_protection"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number" value="<?php echo $platformSettings["wildlife_protection"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden errors"></div>
                                </div>
                                <div class="w-full mt-4 bg-red-100 text-red-700 border border-red-300 text-center py-2 px-4 font-label text-xs font-medium rounded transition-colors hidden"
                                    id="eco-error">
                                    the Eco-Leaf Score must be equal to 100
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end gap-4 pt-6 mt-8 border-t border-surface-container-high">
                        <button type="reset"
                            class="bg-surface-container text-on-surface py-3 px-6 font-label font-bold hover:bg-surface-container-high transition-colors">
                            Discard Changes
                        </button>

                        <button type="submit"
                            class="bg-primary text-on-primary py-3 px-6 font-label font-bold hover:bg-primary-fixed-dim transition-colors shadow-[0px_4px_10px_rgba(22,52,34,0.2)]">
                            Save Configuration
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </main>
    <script>
        function validateForm(event) {
            let platform_fee_percent = document.getElementById("input-1");
            let sustainability_contribution = document.getElementById("input-2");
            let local_tax_percent = document.getElementById("input-3");
            let carbon_footprint = document.getElementById("input-4");
            let local_economy_support = document.getElementById("input-5");
            let wildlife_protection = document.getElementById("input-6");

            function validateNumberInput(containerElement) {
                let input = containerElement.getElementsByTagName("input")[0].value;
                if (input == "" || input < 0) {
                    return false;
                } else {
                    return true;
                }
            }

            if (!validateNumberInput(platform_fee_percent)) {
                event.preventDefault();
                let errorsDiv = platform_fee_percent.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid platform fee";
                errorsDiv.classList.remove("hidden");
            }

            if (!validateNumberInput(sustainability_contribution)) {
                event.preventDefault();
                let errorsDiv = sustainability_contribution.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid sustainability contribution";
                errorsDiv.classList.remove("hidden");
            }

            if (!validateNumberInput(local_tax_percent)) {
                event.preventDefault();
                let errorsDiv = local_tax_percent.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid local tax";
                errorsDiv.classList.remove("hidden");
            }

            if (!validateNumberInput(carbon_footprint)) {
                event.preventDefault();
                let errorsDiv = carbon_footprint.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid carbon footprint";
                errorsDiv.classList.remove("hidden");
            }

            if (!validateNumberInput(local_economy_support)) {
                event.preventDefault();
                let errorsDiv = local_economy_support.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid local economy support";
                errorsDiv.classList.remove("hidden");
            }

            if (!validateNumberInput(wildlife_protection)) {
                event.preventDefault();
                let errorsDiv = wildlife_protection.getElementsByClassName("errors")[0];
                errorsDiv.innerHTML = "please enter a valid wildlife protection";
                errorsDiv.classList.remove("hidden");
            }

            let ecoLeafWeights =
                parseFloat(carbon_footprint.getElementsByTagName("input")[0].value) +
                parseFloat(local_economy_support.getElementsByTagName("input")[0].value) +
                parseFloat(wildlife_protection.getElementsByTagName("input")[0].value);

            if (Math.round(ecoLeafWeights) !== 100) {
                event.preventDefault();
                document.getElementById("eco-error").classList.remove("hidden");
            }

        }
    </script>
</body>

</html>