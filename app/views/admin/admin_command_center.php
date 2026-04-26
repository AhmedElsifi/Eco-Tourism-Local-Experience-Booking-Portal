<?php
$activePage = "Dashboard";
session_start();
require_once("../../../core/connection.php");
require_once("../../models/TravelerModel.php");
require_once("../../models/GuideModel.php");
require_once("../../models/RegionalAuditorModel.php");
require_once("../../models/LogsModel.php");
$travelerModel = new TravelerModel($connect);
$guideModel = new GuideModel($connect);
$regionalAucitorModel = new RegionalAuditorModel($connect);
$logsModel = new LogsModel($connect);
$title = "Super Admin Dashboard - EcoPortal Admin";
require_once("../components/AdminHead.php");
?>



<body class="flex min-h-screen bg-background">
    <!-- SideNavBar -->
    <?php require_once("../components/AdminSideBar.php"); ?>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col md:ml-64 bg-background min-h-screen">
        <!-- Dashboard Canvas -->
        <main class="flex-1 pt-24 px-6 md:px-12 pb-12 overflow-y-auto">
            <div class="max-w-7xl mx-auto">
                <div class="mb-10">
                    <h2 class="font-headline text-display-sm text-on-surface tracking-tight">System Overview</h2>
                    <p class="font-body text-on-surface-variant mt-2">Real-time metrics and global activity logs.</p>
                </div>
                <!-- Metrics Bento Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <!-- Metric Card 1 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-primary relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">group</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Total Travelers</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">
                                <?php
                                $totalTravelers = $travelerModel->getNumberOfTravelers();
                                echo $totalTravelers;
                                ?>
                            </h3>
                        </div>
                    </div>
                    <!-- Metric Card 2 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-secondary relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">explore</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Active Guides</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">
                                <?php
                                $totalGuides = $guideModel->getNumberOfGuides();
                                echo $totalGuides;
                                ?>
                            </h3>
                        </div>
                    </div>
                    <!-- Metric Card 3 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-tertiary-container relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">verified_user</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Regional Auditors</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">
                                <?php
                                $totalAuditors = $regionalAucitorModel->getNumberOfAuditors();
                                echo $totalAuditors;
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- System Logs Section -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-headline text-xl font-bold text-on-surface">Recent System Logs</h3>
                    </div>
                    <div class="bg-surface-container w-full overflow-x-auto">
                        <table class="w-full text-left font-body text-sm whitespace-nowrap">
                            <thead
                                class="bg-surface-container-high text-on-surface-variant border-b border-outline-variant/30">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Timestamp</th>
                                    <th class="px-6 py-4 font-semibold">Entity Type</th>
                                    <th class="px-6 py-4 font-semibold">Entity ID</th>
                                    <th class="px-6 py-4 font-semibold">Action</th>
                                    <th class="px-6 py-4 font-semibold">Field Changed</th>
                                    <th class="px-6 py-4 font-semibold text-right">Changed By</th>
                                    <th class="px-6 py-4 font-semibold text-right">Old Value</th>
                                    <th class="px-6 py-4 font-semibold text-right">New Value</th>
                                    <th class="px-6 py-4 font-semibold text-right">Log ID</th>
                                    <th class="px-6 py-4 font-semibold text-right">options</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/20 text-on-surface">
                                <!-- Row 1 -->
                                <?php
                                $logs = $logsModel->getAllAuditLogs();
                                foreach ($logs as $log) { ?>
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">
                                            <?php echo $log["changed_at"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-surface-container-highest text-on-surface text-xs font-semibold uppercase tracking-wider">
                                                <?php echo $log["entity_type"]; ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <span><?php echo $log["entity_id"]; ?></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-on-surface-variant truncate max-w-xs">
                                            <?php echo $log["action"]; ?>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span><?php echo $log["field_changed"]; ?></span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span><?php echo $log["changed_by"]; ?></span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span><?php echo $log["old_value"]; ?></span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span><?php echo $log["new_value"]; ?></span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span><?php echo $log["log_id"]; ?></span>
                                        </td>
                                        <td class="text-center">
                                            <a href="view_log.php?id=<?= $log['log_id'] ?>"
                                                class="bg-[#163422] hover:bg-[#1f4d2e] text-white px-3 py-1 rounded transition inline-block">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>