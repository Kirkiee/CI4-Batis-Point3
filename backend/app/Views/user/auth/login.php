<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #F9FAFB;
        }

        .btn-primary {
            background-color: #1A4314;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #163610;
        }

        .focus-ring:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(227, 181, 5, 0.5);
        }

        .link {
            color: #1A4314;
        }

        .link:hover {
            color: #E3B505;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen px-4">

    <div class="bg-white shadow-md rounded-2xl w-full max-w-md p-8 border border-gray-100">
        <!-- Logo and Header -->
        <div class="flex flex-col items-center mb-6">
            <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo"
                class="w-16 h-16 rounded-full border border-gray-200 shadow-sm">
            <h2 class="text-3xl font-bold text-[#1A4314] mt-4">Batis Point</h2>
            <p class="text-gray-500 text-sm mt-1">Welcome back — please log in to continue.</p>
        </div>

        <form class="space-y-6 mt-8" action="/login" method="post" novalidate>
            <?= csrf_field() ?>
            <input type="hidden" name="remember" value="0">
            <!-- Username -->
            <div>
                <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full btn-primary font-semibold px-4 py-2 rounded-lg hover:opacity-95 transition-colors duration-150">
                Login
            </button>

            <!-- Divider -->
            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-2 text-sm text-gray-500">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Social Login Buttons -->
            <div class="space-y-3">
                <a href="<?= ('auth/google'); ?>"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-white hover:bg-gray-50 transition">
                    <img src="<?= ('assets/icons/google.svg'); ?>" alt="Google" class="w-5 h-5 mr-2">
                    <span class="text-gray-700 font-medium">Sign in with Google</span>
                </a>

                <a href="<?= ('auth/facebook'); ?>"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-[#1877F2] hover:bg-[#145DBF] transition">
                    <img src="<?= ('assets/icons/facebook.svg'); ?>" alt="Facebook" class="w-5 h-5 mr-2">
                    <span class="text-white font-medium">Sign in with Facebook</span>
                </a>
            </div>

            <div class="text-center text-gray-600 text-sm mt-3 space-y-1">
                <p>
                    Don’t have an account?
                    <a href="<?= ('signup'); ?>" class="font-semibold link transition-colors">Sign Up</a>
                </p>
                <p>
                    <a href="<?= ('auth/forgot-password'); ?>" class="text-gray-500 hover:text-[#E3B505] transition-colors">
                        Forgot Password?
                    </a>
                </p>
            </div>
        </form>


        <!-- Footer -->
        <div class="text-center mt-6">
            <a href="<?= ('/'); ?>"
                class="inline-block px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 text-sm transition">
                ← Back to home
            </a>
            <p class="text-gray-500 text-sm mt-4">&copy; <?= date('Y'); ?> Batis Point. All rights reserved.</p>
        </div>
    </div>

</body>

</html>