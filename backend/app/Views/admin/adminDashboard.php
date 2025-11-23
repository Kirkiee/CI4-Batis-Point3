<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Batis Point — Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        :root {
            --bp-forest: #355E3B;
            --bp-moss: #9EC590;
            --bp-gold: #F1B24A;
            --bp-neutral: #FCFFF1;
        }
    </style>
</head>

<body class="bg-[var(--bp-neutral)] min-h-screen flex font-poppins">

    <!-- Sidebar -->
    <aside class="w-64 bg-[var(--bp-forest)] text-[var(--bp-neutral)] fixed top-0 left-0 h-full shadow-xl p-6 space-y-8">
        <div class="flex items-center space-x-3">
            <img src="/assets/images/logo.jpg" class="w-12 h-12 rounded-full border" />
            <h2 class="text-xl font-proza font-bold">Admin Panel</h2>
        </div>

        <nav class="mt-6 space-y-2">
            <a href="#dashboard" class="block px-4 py-2 rounded-lg bg-[var(--bp-moss)] text-[var(--bp-forest)] font-medium">Dashboard</a>
            <a href="#bookings" class="block px-4 py-2 rounded-lg hover:bg-[var(--bp-moss)] transition">Bookings</a>
            <a href="#inquiries" class="block px-4 py-2 rounded-lg hover:bg-[var(--bp-moss)] transition">Inquiries</a>
            <a href="#gallery" class="block px-4 py-2 rounded-lg hover:bg-[var(--bp-moss)] transition">Gallery Manager</a>
            <a href="#users" class="block px-4 py-2 rounded-lg hover:bg-[var(--bp-moss)] transition">Users</a>
            <form action="/logout" method="post" class="mt-4">
                <?= csrf_field() ?>
                <button type="submit"
                    class="w-full text-left block px-4 py-2 rounded-lg bg-[var(--bp-gold)] text-[var(--bp-forest)] font-semibold hover:opacity-90 transition">
                    Logout
                </button>
            </form>

        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 ml-64 p-10 space-y-10">

        <!-- Header -->
        <header class="flex justify-between items-center">
            <h1 class="text-3xl font-proza font-bold text-[var(--bp-forest)]">Dashboard Overview</h1>
            <p class="text-gray-600">Welcome back, Admin!</p>
        </header>

        <!-- Stats Cards -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-white border border-[var(--bp-moss)] rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-[var(--bp-forest)]">Total Bookings</h3>
                <p class="text-4xl font-bold mt-2">142</p>
            </div>

            <div class="p-6 bg-white border border-[var(--bp-moss)] rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-[var(--bp-forest)]">Unread Inquiries</h3>
                <p class="text-4xl font-bold mt-2">12</p>
            </div>

            <div class="p-6 bg-white border border-[var(--bp-moss)] rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-[var(--bp-forest)]">Registered Users</h3>
                <p class="text-4xl font-bold mt-2">58</p>
            </div>
        </section>

        <!-- Latest Activity Table -->
        <section>
            <h2 class="text-2xl font-proza font-bold text-[var(--bp-forest)] mb-4">Recent Bookings</h2>
            <div class="bg-white border border-[var(--bp-moss)] rounded-2xl shadow-md overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-[var(--bp-moss)] text-[var(--bp-forest)] font-semibold uppercase text-sm">
                        <tr>
                            <th class="px-6 py-3">Guest</th>
                            <th class="px-6 py-3">Date</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4">John Santos</td>
                            <td class="px-6 py-4">Nov 14, 2025</td>
                            <td class="px-6 py-4 text-green-700 font-semibold">Confirmed</td>
                            <td class="px-6 py-4"><a href="#" class="text-[var(--bp-forest)] font-medium hover:underline">View</a></td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4">Maria Lopez</td>
                            <td class="px-6 py-4">Nov 13, 2025</td>
                            <td class="px-6 py-4 text-yellow-600 font-semibold">Pending</td>
                            <td class="px-6 py-4"><a href="#" class="text-[var(--bp-forest)] font-medium hover:underline">View</a></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Sean Cruz</td>
                            <td class="px-6 py-4">Nov 11, 2025</td>
                            <td class="px-6 py-4 text-red-600 font-semibold">Cancelled</td>
                            <td class="px-6 py-4"><a href="#" class="text-[var(--bp-forest)] font-medium hover:underline">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>

</html>