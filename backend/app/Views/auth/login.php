<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Batis Point — Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Proza+Libre:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --bp-forest: #355E3B;
            --bp-moss: #9EC590;
            --bp-gold: #F1B24A;
            --bp-neutral: #FCFFF1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bp-neutral);
        }

        .title-font {
            font-family: 'Proza Libre', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-6 py-10 bg-[var(--bp-neutral)]">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl border border-[var(--bp-moss)] p-10">

        <!-- Logo + Header -->
        <div class="text-center mb-8">
            <img src="/assets/images/logo.jpg"
                class="w-20 h-20 mx-auto rounded-full shadow border border-[var(--bp-gold)]" />

            <h2 class="title-font text-4xl font-bold text-[var(--bp-forest)] mt-5">
                Welcome Back
            </h2>
            <p class="text-gray-600 mt-1 text-sm">
                Log in to continue your Batis Point experience.
            </p>
        </div>

        <!-- Login Form -->
        <form action="/login" method="post" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Email -->
            <div>
                <label class="text-[var(--bp-forest)] font-medium mb-1 block">
                    Email Address
                </label>

                <input type="email" name="email"
                    value="<?= esc($old['email'] ?? '') ?>"
                    placeholder="Enter your email"
                    class="w-full rounded-xl border px-4 py-3 text-gray-900 focus:ring-2 focus:ring-[var(--bp-gold)] 
                       <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?>">
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= esc($errors['email']) ?></p>
                <?php endif; ?>
            </div>

            <div>
                <label class="block font-semibold text-[var(--bp-forest)] mb-1">Password</label>

                <div class="relative">
                    <input id="password" type="password" name="password" required
                        placeholder="Enter your password"
                        class="w-full border <?= isset($errors['password']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?> rounded-xl px-4 py-3 pr-12 focus:ring-2 focus:ring-[var(--bp-gold)] bg-[var(--bp-neutral)] text-gray-900" />

                    <!-- Toggle Button -->
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-3 flex items-center text-gray-600">
                        <i id="eyeIcon" class="fa-solid fa-eye"></i>
                    </button>
                </div>

                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= esc($errors['password']) ?></p>
                <?php endif; ?>
            </div>

            <script>
                const togglePassword = document.getElementById('togglePassword');
                const password = document.getElementById('password');
                const eyeIcon = document.getElementById('eyeIcon');

                togglePassword?.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    eyeIcon.classList.toggle('fa-eye');
                    eyeIcon.classList.toggle('fa-eye-slash');
                });
            </script>



            <!-- Forgot Password -->
            <div class="text-right">
                <a href="/forgot-password"
                    class="text-[var(--bp-forest)] hover:text-[var(--bp-gold)] font-medium text-sm">
                    Forgot password?
                </a>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-[var(--bp-forest)] hover:bg-[var(--bp-gold)] hover:text-[var(--bp-forest)]
                       text-[var(--bp-neutral)] font-semibold py-3 rounded-xl transition">
                Login
            </button>

            <!-- Divider -->
            <div class="flex items-center gap-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="text-gray-500 text-sm">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Social -->
            <div class="space-y-3">
                <a href="/auth/google"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-xl bg-white hover:bg-gray-50 py-3 transition">
                    <img src="/assets/images/Google.png" class="w-5 h-5 mr-2">
                    <span class="text-gray-700 font-medium">Sign in with Google</span>
                </a>

                <a href="/auth/facebook"
                    class="w-full flex items-center justify-center rounded-xl bg-[#1877F2] hover:bg-[#145DBF] text-white py-3 transition">
                    <img src="/assets/images/Facebook.png" class="w-5 h-5 mr-2">
                    <span class="font-medium">Sign in with Facebook</span>
                </a>
            </div>

            <!-- Sign Up -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Don’t have an account?
                <a href="/signup" class="font-semibold text-[var(--bp-forest)] hover:text-[var(--bp-gold)]">
                    Sign Up
                </a>
            </p>

        </form>
    </div>

</body>

</html>