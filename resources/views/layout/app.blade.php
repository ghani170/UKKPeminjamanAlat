<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Elegance Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <div class="flex h-screen overflow-hidden">
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-slate-300 transition-transform duration-300 transform md:relative md:translate-x-0 hidden md:block">
            <div class="flex flex-col h-full">
                <div class="flex items-center justify-center h-20 border-b border-slate-800">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <span class="text-white text-xl font-bold tracking-tight">Peminjaman<span class="text-blue-500"> Alat</span></span>
                    </div>
                </div>

                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <p class="px-4 text-xs font-semibold uppercase text-slate-500 mb-2">Main Menu</p>
                    
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-blue-400 transition-all group {{ request()->routeIs('admin.dashboard') ? 'bg-slate-800 text-blue-400' : '' }}">
                        <i class="fas fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.peminjam.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-blue-400 transition-all group {{ request()->routeIs('admin.peminjam*') ? 'bg-slate-800 text-blue-400' : '' }}">
                        <i class="fas fa-wallet"></i>
                        <span>Kelola Peminjam</span>
                    </a>

                    <a href="{{ route('admin.petugas.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-blue-400 transition-all group {{ request()->routeIs('admin.petugas*') ? 'bg-slate-800 text-blue-400' : '' }}">
                        <i class="fas fa-wallet"></i>
                        <span>Kelola Petugas</span>
                    </a>

                    <a href="{{ route('admin.kategori.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-blue-400 transition-all group {{ request()->routeIs('admin.kategori*') ? 'bg-slate-800 text-blue-400' : '' }}">
                        <i class="fas fa-wallet"></i>
                        <span>Kategori Alat</span>
                    </a>

                    <a href="{{ route('admin.alat.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-blue-400 transition-all group {{ request()->routeIs('admin.alat*') ? 'bg-slate-800 text-blue-400' : '' }}">
                        <i class="fas fa-wallet"></i>
                        <span>Kelola Alat</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all group">
                        <i class="fas fa-users text-slate-500 group-hover:text-blue-400"></i>
                        <span>Customers</span>
                    </a>

                    <div class="pt-6">
                        <p class="px-4 text-xs font-semibold uppercase text-slate-500 mb-2">Supports</p>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all group">
                            <i class="fas fa-cog text-slate-500 group-hover:text-blue-400"></i>
                            <span>Settings</span>
                        </a>
                        <a href="{{ route('logout') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all group">
                            <i class="fas fa-cog text-slate-500 group-hover:text-blue-400"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </nav>

                <div class="p-4 border-t border-slate-800">
                    <div class="bg-slate-800/50 rounded-2xl p-4 flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold">
                            JD
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <p class="text-sm font-medium text-white truncate">John Doe</p>
                            <p class="text-xs text-slate-500 truncate">Pro Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col min-w-0 bg-slate-50">
            <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-8 flex items-center justify-between sticky top-0 z-40">
                <button id="mobile-toggle" class="md:hidden text-slate-600 p-2 hover:bg-slate-100 rounded-lg">
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <div class="flex-1 max-w-xl mx-4 hidden sm:block">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-slate-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all sm:text-sm" placeholder="Search data...">
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 relative">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <button class="px-4 py-2 bg-slate-900 text-white rounded-xl text-sm font-medium hover:bg-slate-800 transition-colors">
                        Generate Report
                    </button>
                </div>
            </header>

            @yield('content')
        </main>
    </div>

    <script>
        const btn = document.getElementById('mobile-toggle');
        const sidebar = document.getElementById('sidebar');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>
</html>