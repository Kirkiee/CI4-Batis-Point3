<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Batis Point — Login</title>

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
            box-shadow: 0 0 0 3px rgba(227, 181, 5, 0.45);
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

        <!-- Header -->
        <div class="flex flex-col items-center mb-6">
            <img src="/assets/images/logo.jpg"
                alt="Batis Point Logo"
                class="w-16 h-16 rounded-full border border-gray-200 shadow-sm">

            <h2 class="text-3xl font-bold text-[#1A4314] mt-4">Welcome Back</h2>
            <p class="text-gray-500 text-sm mt-1">Login to continue your Batis Point experience.</p>
        </div>

        <!-- Login Form -->
        <form action="/login" method="post" class="space-y-5" novalidate>
            <?= csrf_field() ?>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" name="email"
                    placeholder="Enter your email"
                    value="<?= esc($old['email'] ?? '') ?>"
                    class="w-full border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?>
                       rounded-lg px-4 py-2 focus-ring text-gray-900">

                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['email']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password"
                    placeholder="Enter your password"
                    class="w-full border <?= isset($errors['password']) ? 'border-red-500' : 'border-gray-300' ?>
                       rounded-lg px-4 py-2 focus-ring text-gray-900">

                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['password']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Forgot password -->
            <div class="text-right">
                <a href="/forgot-password" class="text-sm link font-medium">Forgot password?</a>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full btn-primary font-semibold px-4 py-2 rounded-lg transition">
                Login
            </button>

            <!-- Divider -->
            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-2 text-sm text-gray-500">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Social Sign In -->
            <div class="space-y-3">
                <a href="/auth/google"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-white hover:bg-gray-50 transition">
                    <img src="/assets/icons/google.svg" alt="Google" class="w-5 h-5 mr-2">
                    <span class="text-gray-700 font-medium">Sign in with Google</span>
                </a>

                <a href="/auth/facebook"
                    class="w-full flex items-center justify-center rounded-lg px-4 py-2 bg-[#1877F2] hover:bg-[#145DBF] transition text-white">
                    <img src="/assets/icons/facebook.svg" alt="Facebook" class="w-5 h-5 mr-2">
                    <span class="font-medium">Sign in with Facebook</span>
                </a>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Don't have an account?
                <a href="/signup" class="font-semibold link">Sign Up</a>
            </p>

        </form>
    </div>

</body>

</html>