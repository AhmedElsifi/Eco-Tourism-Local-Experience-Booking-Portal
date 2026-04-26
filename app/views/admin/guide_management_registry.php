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
            <div class="overflow-x-auto">
                <table class="min-w-full border-separate border-spacing-y-4">

                    <!-- Header -->
                    <thead>
                        <tr
                            class="hidden md:table-row bg-surface-container border-l-4 border-primary text-xs font-headline font-bold tracking-wider text-on-surface uppercase">
                            <th class="text-left px-6 py-3">Guide Id</th>
                            <th class="text-left px-6 py-3">Country Of Residence</th>
                            <th class="text-left px-6 py-3">Years Of Experience</th>
                            <th class="text-left px-6 py-3">status</th>
                            <th class="text-right px-6 py-3">Sustainability Score</th>
                            <th class="text-right px-6 py-3">Cancellation Rate</th>
                            <th class="text-right px-6 py-3">Visibility</th>
                            <th class="text-right px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <?php { ?>
                            <tr
                                class="group bg-surface-container-lowest hover:bg-surface-container-low transition cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15">

                                <!-- Guide -->
                                <td class="px-6 py-4 flex items-center gap-4">
                                    <img class="w-12 h-12 object-cover bg-surface-variant"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOf8Whoy4EWmV27WzcVzcNJ6huCWBIi4YovB-VbrVpb_oHwWgnG8amp425upn7QfUdwnxsEWeEoYxmTR2I8r53uEKFtCwhIAc8_T6qf7o10x_LEOrTtRA4Xr6pH9_wIH8TcomFmdzI6qZWRpM-hTWQwNa2skp_3lifi-yleZTRP7ZoyVSGUmdAY0og_sadSFQZV26QJIxj9DpPfhmuO3KmcCX012f3L7PYc-oPqjN8qyACE_RQYgq0YoJOkcTETKDbPQCbVfDk9RA" />
                                    <div>
                                        <div class="font-bold text-lg text-primary"><?php echo $guide["name"]; ?></div>
                                        <div class="text-xs text-outline font-mono">ID: GD-8492-N</div>
                                    </div>
                                </td>

                                <!-- Specialty -->
                                <td class="px-6 py-4">
                                    <div class="text-sm text-on-surface-variant">
                                        <div class="font-medium text-on-surface">Alpine Tundra</div>
                                        <div class="text-xs">Glacial Ecology</div>
                                    </div>
                                </td>

                                <!-- Eco rating -->
                                <td class="px-6 py-4">
                                    <div class="flex gap-1">
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
                                </td>

                                <!-- Status -->
                                <td class="px-6 py-4">
                                    <span class="bg-primary/10 text-primary px-3 py-1 text-xs font-bold uppercase">
                                        Active
                                    </span>
                                </td>

                                <!-- Action -->
                                <td class="px-6 py-4 text-right">
                                    <span
                                        class="material-symbols-outlined text-outline group-hover:text-primary transition">
                                        arrow_forward
                                    </span>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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