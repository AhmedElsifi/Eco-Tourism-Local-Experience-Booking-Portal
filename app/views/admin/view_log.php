<?php
$activePage = "Dashboard";
session_start();
require_once("../../../core/connection.php");
require_once("../../models/TravelerModel.php");
require_once("../../models/GuideModel.php");
require_once("../../models/RegionalAuditorModel.php");
require_once("../../models/LogsModel.php");
require_once("../../models/UserModel.php");
$userModel = new UserModel($connect);
$regionalAucitorModel = new RegionalAuditorModel($connect);
$logsModel = new LogsModel($connect);
$title = "Audit Log Entry - EcoPortal Admin";
require_once("../components/AdminHead.php");
$log = $logsModel->getLog($_GET["id"]);
$user = $userModel->getUser($log["changed_by"]);
?>

<body class="bg-background text-on-background min-h-screen flex ">
    <!-- SideNavBar Shell -->
    <?php require_once("../components/AdminSideBar.php"); ?>
    <!-- Main Content Canvas -->
    <main class="flex-1 ml-64 bg-background main-content">
        <!-- Content Area -->
        <div class="p-12 max-w-6xl">
            <!-- Header Section with Breadcrumbs -->
            <div class="mb-10">
                <div class="flex items-center gap-2 text-sm text-outline mb-4 font-medium uppercase tracking-widest">
                    <span>Audit Trail</span>
                    <span class="material-symbols-outlined text-xs">chevron_right</span>
                    <span class="text-primary">Log Detail</span>
                </div>
                <div class="flex justify-between items-end">
                    <div>
                        <h1 class="text-5xl font-black tracking-tighter text-primary mb-2">
                            #<?php echo $log["log_id"]; ?></h1>
                        <p class="text-lg text-outline">System record for entity <?php echo $log["entity_id"]; ?>
                            modification</p>
                    </div>
                    <div class="flex gap-4">
                        <button onclick="window.print()"
                            class="bg-surface-container-high text-primary font-bold py-3 px-8 hover:bg-surface-dim transition-colors download-button">
                            DOWNLOAD REPORT
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Layout for Details -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Primary Record Info -->
                <div class="col-span-8 bg-surface-container-low p-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="material-symbols-outlined text-outline opacity-20 text-6xl">verified_user</span>
                    </div>
                    <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-outline mb-8">Modification Details</h3>
                    <div class="grid grid-cols-2 gap-y-10">
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-outline-variant mb-1">Entity
                                Type</p>
                            <p class="text-xl font-bold text-primary"><?php echo $log["entity_type"]; ?></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-outline-variant mb-1">Action
                                Performed</p>
                            <p class="text-xl font-bold text-primary"><?php echo $log["action"]; ?></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-outline-variant mb-1">Entity
                                Reference ID</p>
                            <p class="text-xl font-bold text-primary underline decoration-outline-variant">
                                <?php echo $log["entity_id"]; ?>
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-outline-variant mb-1">
                                Property Changed</p>
                            <p class="text-xl font-bold text-primary"><?php echo $log["field_changed"]; ?></p>
                        </div>
                    </div>
                    <div class="mt-16 bg-white p-8 border-l-4 border-primary">
                        <div class="grid grid-cols-2 gap-8 items-center">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-outline mb-2">Old Value
                                </p>
                                <p class="text-3xl font-light text-outline line-through">
                                    <?php echo $log["old_value"]; ?>
                                </p>
                            </div>
                            <div class="flex items-center gap-6">
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-outline mb-2">New
                                        Value</p>
                                    <p class="text-3xl font-black text-primary"><?php echo $log["new_value"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Admin & Timing Sidebar -->
                <div class="col-span-4 space-y-6">
                    <!-- User Card -->
                    <div class="bg-primary text-on-primary p-8">
                        <h3 class="text-xs font-bold uppercase tracking-[0.2em] opacity-60 mb-6">Changed By</h3>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white"
                                    style="font-variation-settings: 'FILL' 1;">person_edit</span>
                            </div>
                            <div>
                                <p class="font-bold text-lg"><?php echo $user["name"]; ?></p>
                                <p class="text-xs opacity-60"><?php echo $user["role"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Timestamp Card -->
                    <div class="bg-surface-container p-8">
                        <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-outline mb-4">Metadata</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-[10px] font-bold uppercase text-outline-variant">Timestamp</p>
                                <p class="text-sm font-medium"><?php echo $log["changed_at"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments & Analysis -->
                <?php if ($log["comments"]) { ?>
                    <div class="col-span-12 bg-surface-container-high p-8 flex gap-12 items-start">
                        <div class="w-1/3">
                            <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-outline mb-4">Comments</h3>
                            <blockquote class="text-xl font-['Manrope'] italic text-primary-container leading-relaxed">
                                "<?php echo $log["comments"]; ?>"
                            </blockquote>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>