<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point — Sign Up</title>
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

            <h2 class="text-3xl font-bold text-[#1A4314] mt-4">Create an Account</h2>
            <p class="text-gray-500 text-sm mt-1">Join Batis Point and start your private escape experience.</p>
        </div>

        <!-- Signup Form -->
        <form class="space-y-5" action="/signup" method="post" novalidate>
            <?= csrf_field() ?>

            <!-- First Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" name="first_name" required
                    value="<?= esc($old['first_name'] ?? '') ?>"
                    placeholder="Enter your first name"
                    class="w-full border <?= isset($errors['first_name']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['first_name'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['first_name']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Middle Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Middle Name (optional)</label>
                <input type="text" name="middle_name"
                    value="<?= esc($old['middle_name'] ?? '') ?>"
                    placeholder="Enter your middle name"
                    class="w-full border <?= isset($errors['middle_name']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['middle_name']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['middle_name'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['middle_name']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Last Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Last Name</label>
                <input type="text" name="last_name" required
                    value="<?= esc($old['last_name'] ?? '') ?>"
                    placeholder="Enter your last name"
                    class="w-full border <?= isset($errors['last_name']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['last_name'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['last_name']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" name="email" required
                    value="<?= esc($old['email'] ?? '') ?>"
                    placeholder="Enter your email"
                    class="w-full border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['email']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" required
                    placeholder="Create a password"
                    class="w-full border <?= isset($errors['password']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['password']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                <input type="password" name="password_confirm" required
                    placeholder="Re-enter your password"
                    class="w-full border <?= isset($errors['password_confirm']) ? 'border-red-500' : 'border-gray-300' ?>
            rounded-lg px-4 py-2 focus-ring text-gray-900"
                    aria-invalid="<?= isset($errors['password_confirm']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['password_confirm'])): ?>
                    <p class="text-red-600 text-sm mt-2"><?= esc($errors['password_confirm']) ?></p>
                <?php endif; ?>
            </div>

            <!-- Submit -->
            <button name="signup" type="submit" class="w-full btn-primary font-semibold px-4 py-2 rounded-lg transition">
                Create Account
            </button>

            <!-- Divider -->
            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-2 text-sm text-gray-500">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Social Sign Up -->
            <div class="space-y-3">
                <a href="/auth/google"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-white hover:bg-gray-50 transition">
                    <img src="/assets/icons/google.svg" alt="Google" class="w-5 h-5 mr-2">
                    <span class="text-gray-700 font-medium">Sign up with Google</span>
                </a>

                <a href="/auth/facebook"
                    class="w-full flex items-center justify-center rounded-lg px-4 py-2 bg-[#1877F2] hover:bg-[#145DBF] transition text-white">
                    <img src="/assets/icons/facebook.svg" alt="Facebook" class="w-5 h-5 mr-2">
                    <span class="font-medium">Sign up with Facebook</span>
                </a>
            </div>

            <!-- Login Link -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account?
                <a href="/login" class="font-semibold link">Login</a>
            </p>
        </form>


</body>

</html>