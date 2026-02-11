<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* Diubah dari #0f172a (biru gelap) menjadi #f8fafc (putih pucat/slate-50) */
            background-color: #f8fafc;
        }

        .glass-effect {
            /* Warna latar belakang kaca dipertahankan sebagai rgba(255, 255, 255, 0.08) */
            background: rgba(255, 255, 255, 0.5);
            /* Dibuat sedikit lebih solid untuk mode terang */
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            /* Border dipertahankan putih transparan */
            border: 1px solid rgba(0, 0, 0, 0.05);
            /* Diubah ke border hitam sangat transparan */
            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.1),
                /* Disesuaikan agar sesuai dengan mode terang */
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            /* Dipertahankan untuk highlight atas */
        }

        .glass-input {
            /* Latar belakang input sedikit transparan */
            background: rgba(248, 250, 252, 0.8);
            /* Warna dasar terang dengan sedikit transparansi */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            /* Diubah ke border hitam transparan */
            transition: all 0.3s ease;
            color: #1e293b;
            /* Warna teks input diubah ke slate-800 */
        }

        .glass-input:focus {
            background: #ffffff;
            /* Lebih putih saat fokus */
            border: 1px solid rgba(99, 102, 241, 0.5);
            /* Border fokus warna indigo */
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
        }

        .glass-button {
            /* Tombol kaca, diubah agar lebih kontras di mode terang */
            background: rgba(99, 102, 241, 0.9);
            /* Warna indigo solid */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(99, 102, 241, 1);
            transition: all 0.3s ease;
            color: white;
            /* Warna teks tombol tetap putih */
        }

        .glass-button:hover {
            background: #4f46e5;
            /* Warna indigo yang lebih gelap saat hover */
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
            /* Shadow indigo */
        }

        .social-button {
            /* Tombol sosial kaca, diubah agar lebih terlihat */
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .social-button:hover {
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .checkbox-glass {
            /* Checkbox diubah agar terlihat di mode terang */
            background: rgba(248, 250, 252, 0.8);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(0, 0, 0, 0.15);
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        .floating-element-delay {
            animation: float 6s ease-in-out infinite 2s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4 overflow-hidden">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">

        <div class="absolute top-20 right-10 w-72 h-72 bg-slate-200 rounded-full opacity-50 floating-element"></div>
        <div class="absolute bottom-20 left-10 w-64 h-64 bg-slate-200 rounded-full opacity-50 floating-element-delay">
        </div>
        <div class="absolute top-1/3 left-1/4 w-48 h-48 bg-slate-200 rounded-full opacity-50 floating-element"></div>
        <div
            class="absolute bottom-1/3 right-1/4 w-56 h-56 bg-slate-200 rounded-full opacity-50 floating-element-delay">
        </div>

        <div
            class="absolute top-40 left-20 w-32 h-32 border border-slate-300 opacity-20 rounded-lg rotate-45 floating-element-delay">
        </div>
        <div
            class="absolute bottom-40 right-20 w-40 h-40 border border-slate-300 opacity-20 rounded-lg rotate-12 floating-element">
        </div>
    </div>

    <div class="relative w-full max-w-md z-10">
        <div class="glass-effect rounded-2xl p-8">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl glass-effect mb-5">
                    <div class="w-12 h-12 rounded-lg bg-slate-300 flex items-center justify-center">
                        <i class="fas fa-lock text-slate-800 text-xl"></i>
                    </div>
                </div>
                <h1 class="text-2xl font-bold text-slate-800 mb-2">Masuk ke Akun</h1>
                <p class="text-slate-500 text-sm">Masukkan kredensial Anda untuk mengakses dashboard</p>
            </div>
            @if ($errors->any())
                <div class="mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow">
                    <div class="flex items-center">
                        <i class="fas fa-triangle-exclamation mr-2"></i>
                        <p class="font-semibold">Login gagal!</p>
                    </div>
                    <ul class="mt-2 ml-6 list-disc text-sm">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            <form id="loginForm" method="post" action="{{ route('login') }}" class="space-y-6">
                @csrf
                @if(session('error'))
                    <p style="color:red;">{{ session('error') }}</p>
                @endif
                <div>
                    <label class="block text-slate-700 text-sm font-medium mb-2" for="email">
                        <i class="fas fa-envelope mr-2 text-slate-600"></i>Email
                    </label>
                    <div class="relative">
                        <input id="email" type="email" name="email" placeholder="Masukkan Email" required
                            class="glass-input w-full px-4 py-3 pl-12 placeholder-slate-600 rounded-xl focus:outline-none">
                        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-600">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-slate-700 text-sm font-medium mb-2" for="password">
                        <i class="fas fa-key mr-2 text-slate-600"></i>Password
                    </label>
                    <div class="relative">
                        <input id="password" type="password" name="password" placeholder="Masukkan Password" required
                            class="glass-input w-full px-4 py-3 pl-12 placeholder-slate-600 rounded-xl focus:outline-none">
                        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-600">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div id="togglePassword"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-600 hover:text-slate-800 transition-colors">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>


                <button type="submit"
                    class="glass-button w-full font-medium py-3.5 rounded-xl shadow-lg flex items-center justify-center">
                    <i class="fas fa-sign-in-alt mr-3"></i>
                    <span>Masuk ke Akun</span>
                </button>


            </form>


        </div>

        <div class="text-center mt-6">
            <p class="text-slate-700 text-sm">© 2023 Glassmorphism Login. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            const eyeIcon = this.querySelector('i');
            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        });

        // Custom checkbox functionality
        const rememberCheckbox = document.getElementById('remember');
        const checkIcon = document.querySelector('label[for="remember"] .fa-check');

        rememberCheckbox.addEventListener('change', function () {
            if (this.checked) {
                checkIcon.classList.remove('opacity-0');
                checkIcon.classList.add('opacity-100');
            } else {
                checkIcon.classList.remove('opacity-100');
                checkIcon.classList.add('opacity-0');
            }
        });

        // Form submission
        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email && password) {
                const submitButton = loginForm.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;

                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i><span>Memproses...</span>';
                submitButton.disabled = true;

                // Simulasi loading
                setTimeout(() => {
                    // Reset form setelah 1.5 detik
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;

                    // Tampilkan pesan sukses (Warna diubah agar sesuai dengan mode terang)
                    const successMessage = document.createElement('div');
                    successMessage.className = 'mt-4 p-3 rounded-lg bg-green-200 border border-green-400 text-green-800 text-sm text-center';
                    successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i> Login berhasil! Mengarahkan ke dashboard...';

                    // Hapus pesan sebelumnya jika ada
                    const existingMessage = loginForm.querySelector('.bg-green-200'); // Class ini sekarang unik untuk pesan sukses
                    if (existingMessage) {
                        existingMessage.remove();
                    }

                    loginForm.appendChild(successMessage);

                    // Hapus pesan setelah 3 detik
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);

                }, 1500);
            }
        });

        // Efek hover pada input (Dipertahankan, tetapi tidak terlalu berdampak pada mode terang ini)
        const inputs = document.querySelectorAll('.glass-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function () {
                // Tidak ada kelas opacity-100 pada parent, jadi ini tidak berpengaruh seperti sebelumnya, 
                // fokus input sekarang dikelola oleh pseudo-class `:focus` di CSS.
            });

            input.addEventListener('blur', function () {
                // Sama seperti di atas
            });
        });
    </script>
</body>

</html>