<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Daftar Customer / UMKM
                    </h1>
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Menampilkan semua form kontak pelanggan yang masuk
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($customers as $customer)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-indigo-600 dark:text-indigo-400 truncate">
                                    {{ $customer->username }}
                                </h3>
                                <div class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-300 rounded-full text-xs font-semibold">
                                    {{ $customer->category ?? 'Lainnya' }}
                                </div>
                            </div>
                            
                            <div class="space-y-3 mb-4 text-sm">
                                <div class="flex items-center text-gray-600 dark:text-gray-300">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    {{ $customer->email }}
                                </div>
                                <div class="flex items-center text-gray-600 dark:text-gray-300">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    {{ $customer->phone }}
                                </div>
                            </div>

                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl text-gray-700 dark:text-gray-300 text-sm italic">
                                "{!! nl2br(e($customer->message)) !!}"
                            </div>
                            
                            <div class="mt-4 text-xs text-right text-gray-400 font-medium">
                                {{ $customer->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 text-center shadow-sm">
                            <span class="text-gray-500 dark:text-gray-400 italic">Belum ada data customer masuk.</span>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $customers->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
