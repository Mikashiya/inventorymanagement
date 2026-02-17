<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased flex">
    <!-- Sidebar -->
    <div id="sidebar" class="w-[10vw] h-[100vh] bg-neutral-100 shadow-md transition-all">

    </div>
    <!-- Main Body -->
    <div class="w-full h-[100vh]">
        <!-- Header -->
        <div class="w-full h-[5vh] bg-neutral-100 shadow-md flex items-center gap-3 px-3">
            <button onclick="toggleSidebar()" class="text-xl">=</button>
        </div>
        <!-- Dashboard -->
        <div class="w-full h-[95vh] p-10 grid gap-10 bg-neutral-800">
            <div class="grid grid-cols-3 gap-10">
                <div class="col-span-1 bg-neutral-100 rounded-xl p-5">
                    <p>TEST</p>
                </div>
                <div class="col-span-1 bg-neutral-100 rounded-xl">

                </div>
            </div>
            <div class="grid grid-cols-3 gap-10">
                <div class="col-span-3 bg-neutral-100 rounded-xl">

                </div>
            </div>
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