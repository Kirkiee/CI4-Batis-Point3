<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Batis Point — Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Moodboard Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Proza+Libre:wght@500;700&display=swap" rel="stylesheet">
    <!-- Toggle password -->
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
            color: var(--bp-forest);
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Proza Libre', sans-serif;
        }

        .focus-ring:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(241, 178, 74, 0.4);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-12 bg-[var(--bp-neutral)]">

    <!-- Container -->
    <div class="bg-white border border-[var(--bp-moss)] shadow-xl rounded-3xl w-full max-w-lg p-10">

        <!-- Header -->
        <div class="text-center mb-8">
            <img src="/assets/images/logo-circle.png" class="w-24 h-24 mx-auto drop-shadow-md" alt="Batis Point Logo">

            <h2 class="text-4xl font-bold mt-4 text-[var(--bp-forest)]">Create Your Account</h2>
            <p class="text-gray-600 mt-2 text-sm">Join Batis Point and discover serene private escapes.</p>
        </div>

        <!-- Signup Form -->
        <form action="/signup" method="post" novalidate class="space-y-5">
            <?= csrf_field() ?>

            <!-- Name Fields Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <label class="block font-semibold text-[var(--bp-forest)] mb-1">First Name</label>
                    <input type="text" name="first_name" required value="<?= esc($old['first_name'] ?? '') ?>" placeholder="First name" class="w-full border <?= isset($errors['first_name']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?> rounded-xl px-4 py-2 focus-ring bg-[var(--bp-neutral)] text-gray-900" />
                    <?php if (!empty($errors['first_name'])): ?>
                        <p class="text-red-600 text-sm mt-1"> <?= esc($errors['first_name']) ?> </p>
                    <?php endif; ?>
                </div>

                <!-- Middle Name -->
                <div>
                    <label class="block font-semibold text-[var(--bp-forest)] mb-1">Middle Name</label>
                    <input type="text" name="middle_name" value="<?= esc($old['middle_name'] ?? '') ?>" placeholder="Optional" class="w-full border <?= isset($errors['middle_name']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?> rounded-xl px-4 py-2 focus-ring bg-[var(--bp-neutral)] text-gray-900" />
                    <?php if (!empty($errors['middle_name'])): ?>
                        <p class="text-red-600 text-sm mt-1"> <?= esc($errors['middle_name']) ?> </p>
                    <?php endif; ?>
                </div>

                <!-- Last Name -->
                <div>
                    <label class="block font-semibold text-[var(--bp-forest)] mb-1">Last Name</label>
                    <input type="text" name="last_name" required value="<?= esc($old['last_name'] ?? '') ?>" placeholder="Last name" class="w-full border <?= isset($errors['last_name']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?> rounded-xl px-4 py-2 focus-ring bg-[var(--bp-neutral)] text-gray-900" />
                    <?php if (!empty($errors['last_name'])): ?>
                        <p class="text-red-600 text-sm mt-1"> <?= esc($errors['last_name']) ?> </p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block font-semibold text-[var(--bp-forest)] mb-1">Email Address</label>
                <input type="email" name="email" required value="<?= esc($old['email'] ?? '') ?>" placeholder="Enter your email" class="w-full border <?= isset($errors['email']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?> rounded-xl px-4 py-2 focus-ring bg-[var(--bp-neutral)] text-gray-900" />
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-600 text-sm mt-1"> <?= esc($errors['email']) ?> </p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label class="block font-semibold text-[var(--bp-forest)] mb-1">Password</label>

                <div class="relative">
                    <input id="password" type="password" name="password" required
                        placeholder="Create a password"
                        class="w-full border <?= isset($errors['password']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?>
            rounded-xl px-4 py-2 pr-12 focus-ring bg-[var(--bp-neutral)] text-gray-900" />

                    <!-- Show/Hide Button -->
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-3 flex items-center text-gray-600">
                        <i id="eyeIcon" class="fa-solid fa-eye"></i>
                    </button>
                </div>

                <ul class="text-sm mt-2 space-y-1" id="password-rules">
                    <li id="rule-length" class="text-red-600">• At least 8 characters</li>
                    <li id="rule-upper" class="text-red-600">• At least one uppercase letter</li>
                    <li id="rule-special" class="text-red-600">• At least one special character (!, @, #, $, %, &)</li>
                </ul>

                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= esc($errors['password']) ?></p>
                <?php endif; ?>
            </div>


            <!-- Confirm Password -->
            <div>
                <label class="block font-semibold text-[var(--bp-forest)] mb-1">Confirm Password</label>

                <div class="relative">
                    <input id="password_confirm" type="password" name="password_confirm" required
                        placeholder="Re-enter your password"
                        class="w-full border <?= isset($errors['password_confirm']) ? 'border-red-500' : 'border-[var(--bp-moss)]' ?>
            rounded-xl px-4 py-2 pr-12 focus-ring bg-[var(--bp-neutral)] text-gray-900" />

                    <!-- Show/Hide Button -->
                    <button type="button" id="toggleConfirmPassword"
                        class="absolute inset-y-0 right-3 flex items-center text-gray-600">
                        <i id="eyeIconConfirm" class="fa-solid fa-eye"></i>
                    </button>
                </div>

                <p id="passwordMatch" class="hidden text-sm mt-1"></p>

                <?php if (!empty($errors['password_confirm'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= esc($errors['password_confirm']) ?></p>
                <?php endif; ?>
            </div>

            <script>
                // Password toggle functionality
                const togglePassword = document.getElementById('togglePassword');
                const password = document.getElementById('password');
                const eyeIcon = document.getElementById('eyeIcon');

                togglePassword?.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    eyeIcon.classList.toggle('fa-eye');
                    eyeIcon.classList.toggle('fa-eye-slash');
                });

                // Confirm password toggle functionality
                const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
                const confirmPassword = document.getElementById('password_confirm');
                const eyeIconConfirm = document.getElementById('eyeIconConfirm');

                toggleConfirmPassword?.addEventListener('click', function() {
                    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmPassword.setAttribute('type', type);
                    eyeIconConfirm.classList.toggle('fa-eye');
                    eyeIconConfirm.classList.toggle('fa-eye-slash');
                });

                // Password validation
                const passwordInput = document.getElementById('password');
                const lengthCheck = document.getElementById('rule-length');
                const uppercaseCheck = document.getElementById('rule-upper');
                const specialCheck = document.getElementById('rule-special');

                passwordInput.addEventListener('input', function() {
                    const value = this.value;

                    updateRule(lengthCheck, value.length >= 8);
                    updateRule(uppercaseCheck, /[A-Z]/.test(value));
                    updateRule(specialCheck, /[!@#$%]/.test(value));
                    validateForm();
                });

                function updateRule(element, condition) {
                    if (condition) {
                        element.classList.remove('text-red-600');
                        element.classList.add('text-green-600');
                    } else {
                        element.classList.remove('text-green-600');
                        element.classList.add('text-red-600');
                    }
                }

                // Password match validation
                const passwordMatchMsg = document.getElementById('passwordMatch');

                confirmPassword?.addEventListener('input', function() {
                    if (this.value === '') {
                        passwordMatchMsg.classList.add('hidden');
                    } else if (this.value === passwordInput.value) {
                        passwordMatchMsg.textContent = 'Passwords match ✓';
                        passwordMatchMsg.classList.remove('text-red-500', 'hidden');
                        passwordMatchMsg.classList.add('text-green-500');
                    } else {
                        passwordMatchMsg.textContent = 'Passwords do not match';
                        passwordMatchMsg.classList.remove('text-green-500', 'hidden');
                        passwordMatchMsg.classList.add('text-red-500');
                    }
                    validateForm();
                });

                // Form validation
                function validateForm() {
                    const registerBtn = document.getElementById('registerBtn');
                    const termsChecked = document.getElementById('terms')?.checked;

                    const isPasswordValid =
                        lengthCheck.classList.contains('text-green-600') &&
                        uppercaseCheck.classList.contains('text-green-600') &&
                        specialCheck.classList.contains('text-green-600');

                    const isPasswordMatch =
                        passwordInput.value === confirmPassword?.value &&
                        confirmPassword?.value !== '';

                    if (registerBtn) {
                        registerBtn.disabled = !(isPasswordValid && isPasswordMatch && termsChecked);
                    }
                }
            </script>
            <!-- Submit Button -->
            <button name="signup" type="submit" class="w-full bg-[var(--bp-forest)] hover:bg-[#294b30] text-white font-semibold px-4 py-3 rounded-xl transition shadow-md">
                Create Account
            </button>

            <!-- Divider -->
            <div class="flex items-center gap-4 my-6">
                <div class="flex-grow h-px bg-gray-300"></div>
                <span class="text-gray-500 text-sm">or</span>
                <div class="flex-grow h-px bg-gray-300"></div>
            </div>

            <!-- Social Buttons -->
            <div class="space-y-3">
                <a href="/auth/google" class="w-full flex items-center justify-center border border-gray-300 rounded-xl px-4 py-3 bg-white hover:bg-gray-50 transition shadow-sm">
                    <img src="/assets/images/google.png" class="w-5 h-5 mr-2" />
                    <span class="text-gray-700 font-medium">Sign up with Google</span>
                </a>

                <a href="/auth/facebook" class="w-full flex items-center justify-center rounded-xl px-4 py-3 bg-[#1877F2] hover:bg-[#145DBF] transition text-white shadow-sm">
                    <img src="/assets/images/Facebook.png" class="w-5 h-5 mr-2" />
                    <span class="font-medium">Sign up with Facebook</span>
                </a>
            </div>

            <!-- Login Link -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account?
                <a href="/login" class="font-semibold text-[var(--bp-forest)] hover:text-[var(--bp-gold)]">Login</a>
            </p>
        </form>
    </div>
</body>

</html>