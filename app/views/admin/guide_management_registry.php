<?php
session_start();
$title = "Manage Guides - EcoPortal Admin";
$activePage = "Guides";
require_once("../components/AdminHead.php");
?>



<body class="bg-background text-on-background font-body antialiased min-h-screen flex">
    <!-- SideNavBar -->
    <?php require_once("../components/AdminSideBar.php"); ?>
    <!-- Main Content Canvas -->
    <main class="flex-1 md:ml-64 mt-16 md:mt-0 p-6 md:p-12">
        <div class="max-w-7xl mx-auto">
            <header class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h2 class="font-headline font-extrabold text-4xl text-primary tracking-tight mb-2">Manage Guides
                    </h2>
                    <p class="text-on-surface-variant font-body text-sm">Manage ecosystem stewards and specialized
                        terrain experts.</p>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="relative bg-surface-container-low p-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-outline">search</span>
                        <input
                            class="bg-transparent border-none focus:ring-0 text-sm font-body text-on-surface outline-none w-48"
                            placeholder="Search ID or Name" type="text" />
                    </div>
                    <button
                        class="bg-primary text-on-primary px-6 py-3 font-headline font-bold text-sm hover:bg-primary-container transition-colors duration-200 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                    </button>
                </div>
            </header>
            <!-- Brutalist Table Replacement: High-Density List Cards -->
            <div class="flex flex-col gap-8">
                <!-- Table Header (Visual only for md+) -->
                <div
                    class="hidden md:grid grid-cols-12 gap-4 px-6 py-3 bg-surface-container border-l-4 border-primary text-xs font-headline font-bold tracking-wider text-on-surface uppercase">
                    <div class="col-span-4">Guide Identifier</div>
                    <div class="col-span-3">Specialty / Zone</div>
                    <div class="col-span-2">Eco-Rating</div>
                    <div class="col-span-2">Status</div>
                    <div class="col-span-1 text-right">Action</div>
                </div>
                <!-- Row Item 1 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a rugged male outdoors guide wearing a practical jacket"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOf8Whoy4EWmV27WzcVzcNJ6huCWBIi4YovB-VbrVpb_oHwWgnG8amp425upn7QfUdwnxsEWeEoYxmTR2I8r53uEKFtCwhIAc8_T6qf7o10x_LEOrTtRA4Xr6pH9_wIH8TcomFmdzI6qZWRpM-hTWQwNa2skp_3lifi-yleZTRP7ZoyVSGUmdAY0og_sadSFQZV26QJIxj9DpPfhmuO3KmcCX012f3L7PYc-oPqjN8qyACE_RQYgq0YoJOkcTETKDbPQCbVfDk9RA" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Elias Thorne</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-8492-N</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Alpine Tundra</span>
                        <span class="text-xs">Glacial Ecology</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-primary/10 text-primary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider">
                            Active
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
                <!-- Row Item 2 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a female guide with a natural look and practical outdoor clothing"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbIm50SGDTYd07SkszMfIfDUGCzrOKKSM_oDidaX7qG8ee7R-jdU0CInDb1-ToXtCAgXo_3PUfiRNS5OPdIsN7_LzoaKR3dUFCV4bp52nQP5sK6TzdJHPjT_mgbI4EdSTgFh3jcpwX9G7RfN8m8pafMTBPrKc0at1DxpoFjRiA892SqVhvl_b2KIoZNddx1NVlunDsj0C2ZNoe-vw84U1vLU72BEFG7BjZgFWE08bC_0ktFCKUIZClmnPZImYZ-O0yktzW5Ht5wQ4" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Sarah Jenkins</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-7102-S</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Coastal Rainforest</span>
                        <span class="text-xs">Mycology</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-secondary/10 text-secondary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider border-l-2 border-secondary">
                            Awaiting Approval
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
                <!-- Row Item 3 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a rugged male outdoors guide looking determined"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-lRTBqOGTrB9Hxi69d9bbBu_ciz1_yBTg4EcCN15NOVmItZguD88OFFiH7EqhvT_R4YbHHMs65XohPd0Yg8B5Sy45Bqyc7viw6kozZIhlJqiDgs32ji2aW6X66I_MJlD9wVmuMWGslHSmsaZo5caTDRCgvHbxHJy2HHNnx93Mxf9mVamBuDJt1uahQPLRkcEhAssz3-K0HTI96zCjDEP70-mq4ndBLOaIAvok5Y0XwvA1nkO2CU59sPpOMY4rz78AX57lqAkq9DI" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Marcus Lin</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-9931-E</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Desert Canyons</span>
                        <span class="text-xs">Geology Focus</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-primary/10 text-primary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider">
                            Active
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
            </div>
            <!-- Pagination Brutalist -->
            <div class="mt-12 flex justify-between items-center border-t border-outline-variant/20 pt-6">
                <span class="font-body text-sm text-on-surface-variant">Showing 1-3 of 142 Guides</span>
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-primary text-on-primary font-headline font-bold">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high font-headline font-bold transition-colors">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high font-headline font-bold transition-colors">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

    </main>
</body>

</html>

