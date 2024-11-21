<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>
<body class="bg-gray-100 text-gray-800 flex">

    <!-- Sidebar -->
    <?php include __DIR__ . "/components/sidebar.php"; ?>

    <!-- Main Wrapper -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <?php include __DIR__ . "/components/navbar.php"; ?>

        <!-- Main Content -->
        <main id="main-content" class="p-4">
            <?php
            $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
            if (empty($file)) {
                require __DIR__ . "/views/dashboard.php";
            } elseif ($file && file_exists(__DIR__ . "/views/{$file}.php")) {
                require __DIR__ . "/views/{$file}.php";
            } else {
                require __DIR__ . "/views/404.php";
            }
            ?>
        </main>
    </div>

    <!-- Scripts -->
    <script>
    const toggleSidebarButton = document.getElementById("toggle-sidebar");
    const sidebar = document.getElementById("logo-sidebar");
    const mainWrapper = document.getElementById("main-wrapper");
    const sidebarTextElements = document.querySelectorAll(".sidebar-text");

    toggleSidebarButton.addEventListener("click", () => {
        // Alternar largura do sidebar
        sidebar.classList.toggle("w-64");
        sidebar.classList.toggle("w-20");

        // Ajustar margem do conteúdo principal
        mainWrapper.classList.toggle("ml-64");
        mainWrapper.classList.toggle("ml-20");

        // Esconder ou mostrar textos do sidebar
        sidebarTextElements.forEach(text => text.classList.toggle("hidden"));
    });
</script>


</body>
</html>