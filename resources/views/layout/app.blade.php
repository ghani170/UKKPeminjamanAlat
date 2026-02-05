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
                        <span class="text-white text-xl font-bold tracking-tight">Nexus<span class="text-blue-500">UI</span></span>
                    </div>
                </div>

                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <p class="px-4 text-xs font-semibold uppercase text-slate-500 mb-2">Main Menu</p>
                    
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-900/20">
                        <i class="fas fa-chart-pie"></i>
                        <span class="font-medium">Overview</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all group">
                        <i class="fas fa-wallet text-slate-500 group-hover:text-blue-400"></i>
                        <span>Transactions</span>
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

            <div class="flex-1 overflow-y-auto p-8">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-slate-900">Welcome Back, John! 👋</h1>
                    <p class="text-slate-500">Here's what's happening with your projects today.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-4 text-xl">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Total Revenue</p>
                        <p class="text-3xl font-bold text-slate-900 mt-1">$45,285.00</p>
                        <div class="mt-4 flex items-center text-xs font-semibold text-green-600 bg-green-50 w-fit px-2 py-1 rounded-lg">
                            <i class="fas fa-caret-up mr-1"></i> +12%
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-4 text-xl">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Active Orders</p>
                        <p class="text-3xl font-bold text-slate-900 mt-1">1,254</p>
                        <div class="mt-4 flex items-center text-xs font-semibold text-green-600 bg-green-50 w-fit px-2 py-1 rounded-lg">
                            <i class="fas fa-caret-up mr-1"></i> +5.4%
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-4 text-xl">
                            <i class="fas fa-clock"></i>
                        </div>
                        <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Avg. Session</p>
                        <p class="text-3xl font-bold text-slate-900 mt-1">18m 42s</p>
                        <div class="mt-4 flex items-center text-xs font-semibold text-red-600 bg-red-50 w-fit px-2 py-1 rounded-lg">
                            <i class="fas fa-caret-down mr-1"></i> -2.1%
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="font-bold text-slate-900 text-lg">Recent Transactions</h3>
                        <button class="text-blue-600 text-sm font-semibold hover:underline">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold">
                                <tr>
                                    <th class="px-8 py-4">Client</th>
                                    <th class="px-8 py-4">Status</th>
                                    <th class="px-8 py-4">Date</th>
                                    <th class="px-8 py-4 text-right">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                            <span class="font-medium text-slate-900 text-sm">Adobe Systems</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-green-100 text-green-700">Completed</span>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-slate-500">Oct 24, 2023</td>
                                    <td class="px-8 py-5 text-right font-bold text-slate-900">$2,400.00</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                            <span class="font-medium text-slate-900 text-sm">Figma Design</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-700">Pending</span>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-slate-500">Oct 23, 2023</td>
                                    <td class="px-8 py-5 text-right font-bold text-slate-900">$850.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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