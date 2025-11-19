<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 h-full w-64 bg-green-900 text-white flex flex-col shadow-xl">
        <div class="p-6 text-2xl font-bold border-b border-green-700">
            Batis Point Admin
        </div>

        <nav class="flex-1 p-4 space-y-3">
            <a href="/admin/dashboard" class="block p-3 rounded-lg bg-green-700 hover:bg-green-600">Dashboard</a>
            <a href="/admin/users" class="block p-3 rounded-lg hover:bg-green-700">Users</a>
            <a href="/admin/inquiries" class="block p-3 rounded-lg hover:bg-green-700">Inquiries</a>
            <a href="/admin/settings" class="block p-3 rounded-lg hover:bg-green-700">Settings</a>
        </nav>

        <form action="/logout" method="post" class="p-4 border-t border-green-700">
            <button class="w-full p-3 bg-red-600 hover:bg-red-500 rounded-lg font-semibold">Logout</button>
        </form>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-10">
        <h1 class="text-3xl font-bold text-green-900">Dashboard Overview</h1>
        <p class="text-gray-600 mt-2">Welcome to your admin dashboard.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            <div class="p-6 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-700">Total Users</h2>
                <p class="mt-4 text-4xl font-bold text-green-800">128</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-700">Monthly Inquiries</h2>
                <p class="mt-4 text-4xl font-bold text-green-800">56</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-700">Active Staff</h2>
                <p class="mt-4 text-4xl font-bold text-green-800">7</p>
            </div>
        </div>

        <div class="mt-10 p-6 bg-white rounded-xl shadow-md border border-gray-200">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Latest Inquiries</h2>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="p-3">Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Date</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-3">Juan Dela Cruz</td>
                        <td class="p-3">juan@example.com</td>
                        <td class="p-3">2025-11-17</td>
                        <td class="p-3"><span class="px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full text-sm">Pending</span></td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3">Maria Santos</td>
                        <td class="p-3">maria@example.com</td>
                        <td class="p-3">2025-11-17</td>
                        <td class="p-3"><span class="px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm">Answered</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>