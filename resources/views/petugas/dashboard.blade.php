@extends('layout.app')
@section('title', 'Dashboard Admin')

@section('content')
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
                <div
                    class="mt-4 flex items-center text-xs font-semibold text-green-600 bg-green-50 w-fit px-2 py-1 rounded-lg">
                    <i class="fas fa-caret-up mr-1"></i> +12%
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                <div
                    class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-4 text-xl">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Active Orders</p>
                <p class="text-3xl font-bold text-slate-900 mt-1">1,254</p>
                <div
                    class="mt-4 flex items-center text-xs font-semibold text-green-600 bg-green-50 w-fit px-2 py-1 rounded-lg">
                    <i class="fas fa-caret-up mr-1"></i> +5.4%
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                <div
                    class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-4 text-xl">
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
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-green-100 text-green-700">Completed</span>
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
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-700">Pending</span>
                            </td>
                            <td class="px-8 py-5 text-sm text-slate-500">Oct 23, 2023</td>
                            <td class="px-8 py-5 text-right font-bold text-slate-900">$850.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection