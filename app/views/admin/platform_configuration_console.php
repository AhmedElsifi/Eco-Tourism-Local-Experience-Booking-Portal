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
                <form onsubmit="return validateForm()" action="../../controllers/ConfigController.php" method="POST">
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
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Base Platform Commission (%)
                                    </label>
                                    <input name="platform_fee_percent"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["platform_fee_percent"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
                                </div>
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Sustainability Contribution (%)
                                    </label>
                                    <input name="sustainability_contribution"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["sustainability_contribution"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
                                </div>
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">
                                        Local Tax Percent (%)
                                    </label>
                                    <input name="local_tax_percent"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none mb-2"
                                        type="number" step="0.1"
                                        value="<?php echo $platformSettings["local_tax_percent"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
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
                                <div>
                                    <label class="font-label text-sm font-medium text-on-surface">Carbon Offset
                                        (%)</label>
                                    <input name="carbon_footprint"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number" value="<?php echo $platformSettings["carbon_footprint"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
                                </div>
                                <div>
                                    <label class="font-label text-sm font-medium text-on-surface">Local Economy Support
                                        (%)</label>
                                    <input name="local_economy_support"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number"
                                        value="<?php echo $platformSettings["local_economy_support"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
                                </div>
                                <div>
                                    <label class="font-label text-sm font-medium text-on-surface">Wildlife Protection
                                        (%)</label>
                                    <input name="wildlife_protection"
                                        class="w-full bg-surface border border-outline text-on-surface p-3 mt-2"
                                        type="number" value="<?php echo $platformSettings["wildlife_protection"]; ?>" />
                                    <div class="text-red-500 text-sm mt-1 hidden" id="error_platform_fee"></div>
                                </div>
                                <button type="button"
                                    class="w-full mt-4 bg-surface-container hover:bg-surface-container-high text-on-surface py-2 px-4 font-label text-sm font-medium transition-colors">
                                    Adjust Weights
                                </button>
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
        function val(name) {
            return document.querySelector(`[name='${name}']`).value;
        }

        function num(v) {
            return v !== "" && !isNaN(v);
        }

        function err(id, msg) {
            const el = document.getElementById(id);
            if (el) {
                el.innerText = msg;
                el.classList.remove("hidden");
            }
        }

        function clearErrors() {
            document.querySelectorAll("[id^='error_']").forEach(e => {
                e.innerText = "";
                e.classList.add("hidden");
            });
        }

        function validateForm() {
            clearErrors();

            let p = val("platform_fee_percent");
            let s = val("sustainability_contribution");
            let t = val("local_tax_percent");
            let c = val("carbon_footprint");
            let e = val("local_economy_support");
            let w = val("wildlife_protection");

            let ok = true;

            if (!num(p)) { err("error_platform_fee", "Invalid"); ok = false; }
            if (!num(s)) { err("error_sustainability", "Invalid"); ok = false; }
            if (!num(t)) { err("error_tax", "Invalid"); ok = false; }
            if (!num(c)) { err("error_carbon", "Invalid"); ok = false; }
            if (!num(e)) { err("error_economy", "Invalid"); ok = false; }
            if (!num(w)) { err("error_wildlife", "Invalid"); ok = false; }

            let eco = (+c + +e + +w).toFixed(2);
            let fees = (+p + +s + +t).toFixed(2);

            if (eco != 100) { alert("Eco must be 100% (now " + eco + ")"); ok = false; }
            if (fees > 100) { alert("Fees exceed 100% (now " + fees + ")"); ok = false; }

            return ok;
        }
    </script>
</body>

</html>