<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-neutral-100 flex">
    <!-- Sidebar -->
    <div id="sidebar" class="w-[10vw] h-[100vh] shadow-md transition-all">

    </div>
    <!-- Main Body -->
    <div class="w-full h-[100vh]">
        <!-- Header -->
        <div class="w-full h-[5vh] shadow-md flex items-center gap-3 px-3">
            <button onclick="toggleSidebar()" class="text-xl">=</button>
        </div>
    </div>
</body>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar')
        sidebar.classList.toggle('w-[10vw]')
        sidebar.classList.toggle('w-[0vw]')
    }
</script>
</html>