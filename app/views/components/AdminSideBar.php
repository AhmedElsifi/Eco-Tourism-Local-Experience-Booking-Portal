<?php

$activePage;
$classes = "text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80";
$activePageClasses = "bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80";


?>

<nav
    class="hidden md:flex bg-[#edeee9] dark:bg-[#1a1c18] text-[#163422] dark:text-[#d1e8d5] rounded-none w-64 h-full fixed left-0 top-0 flex-col py-8 border-r border-[#727972]/15 z-40">
    <div class="px-6 mb-8">
        <h1 class="font-headline font-black text-lg tracking-widest text-[#163422] dark:text-[#d1e8d5]">EcoPortal
            Admin</h1>
        <p class="font-body font-medium text-sm mt-1 text-on-surface-variant">Admin Console v1.0</p>
    </div>
    <ul class="flex flex-col gap-1 px-2 font-['Manrope'] font-medium text-sm">
        <li>
            <a class="<?php echo $activePage == "Dashboard" ? $activePageClasses : $classes; ?>"
                href="admin_command_center.php">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Guides" ? $activePageClasses : $classes; ?>"
                href="guide_management_registry.php">
                <span class="material-symbols-outlined">explore</span>
                Guides
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Travelers" ? $activePageClasses : $classes; ?>"
                href="traveler_directory.php">
                <span class="material-symbols-outlined">group</span>
                Travelers
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Auditors" ? $activePageClasses : $classes; ?>"
                href="regional_auditor_oversight.php">
                <span class="material-symbols-outlined">verified_user</span>
                Auditors
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Tours" ? $activePageClasses : $classes; ?>"
                href="tour_registry_monitoring.php">
                <span class="material-symbols-outlined">map</span>
                Tours
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Reports" ? $activePageClasses : $classes; ?>"
                href="impact_analytics_reporting.php">
                <span class="material-symbols-outlined">analytics</span>
                Reports
            </a>
        </li>
        <li>
            <a class="<?php echo $activePage == "Settings" ? $activePageClasses : $classes; ?>"
                href=" platform_configuration_console.php">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
        </li>
    </ul>
    <div class="mt-auto px-6 flex items-center gap-3">
        <img alt="Super Admin Avatar" class="w-10 h-10 object-cover border border-outline-variant/30"
            data-alt="Close up portrait of a professional man in a dark green shirt against a neutral background, authoritative but approachable"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdCwSlhbIxjvWXD9_VqMqOANL6nJ4-20SfRxmPokRkgSmqepZwHJUwpWFLli2fiHvWYKO3McnDrTHxezTgKSIIfeuWFW8ecIqd3kcnhOd1s6OxuSC7aWXcstDuFgDPN-5XEQaY244QZ_U843Jizw_kl4bSzbF90mdm0oquYfeFbXgmnYT6Arrb40DhGybwjE6H60t64BrNbqGayGKZcOb8G2zFNSQ6kBjFLH6eLcJ9hsQH8k0O5Z2wNsq2GAK2XOFhzUZmvU-SIw8" />
        <div>
            <p class="font-body font-semibold text-sm text-on-surface"><?php echo $_SESSION['name']; ?></p>
            <p class="font-label text-xs text-on-surface-variant">System Admin</p>
        </div>
    </div>
    <div class="mt-4 border-t border-[#727972]/15">
        <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
            <li>
                <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                    href="#">
                    <span class="material-symbols-outlined">logout</span>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>