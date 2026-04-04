<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="mb-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Daftar Talent
                    </h1>
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Menampilkan daftar pendaftar calon profesional talent
                    </span>
                </div>
                @if (isset($unreadCount) && $unreadCount > 0)
                    <div
                        class="bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 px-4 py-2 rounded-lg font-bold text-sm shadow-sm border border-red-200 dark:border-red-800">
                        {{ $unreadCount }} Belum Dibaca
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($talents as $talent)
                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border {{ $talent->is_read ? 'border-gray-100 dark:border-gray-700' : 'border-indigo-300 dark:border-indigo-600 shadow-indigo-100 dark:shadow-none' }} hover:shadow-2xl transition duration-300 transform hover:-translate-y-1 relative">

                        @if (!$talent->is_read)
                            <div class="absolute top-4 right-4 w-3 h-3 bg-indigo-500 rounded-full animate-pulse"></div>
                        @endif

                        <div class="p-6">
                            <div class="flex items-center space-x-4 mb-4">
                                <div
                                    class="w-12 h-12 bg-linear-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-md">
                                    {{ strtoupper(substr($talent->name, 0, 1)) }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white truncate">
                                        {{ $talent->name }}
                                    </h3>
                                    <div class="text-sm font-medium text-emerald-600 dark:text-emerald-400">
                                        {{ $talent->skill }}
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2 mb-4 text-sm">
                                <div
                                    class="flex items-center justify-between py-1 border-b border-gray-50 dark:border-gray-700/50">
                                    <span class="text-gray-500 dark:text-gray-400">Pengalaman</span>
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ $talent->experience }}
                                        Tahun</span>
                                </div>
                                <div
                                    class="flex items-center justify-between py-1 border-b border-gray-50 dark:border-gray-700/50">
                                    <span class="text-gray-500 dark:text-gray-400">Ketersediaan</span>
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ ucfirst($talent->availability) }}</span>
                                </div>
                                <div class="flex items-center pt-1 text-gray-600 dark:text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <span class="truncate">{{ $talent->email }}</span>
                                </div>
                                <div class="flex items-center text-gray-600 dark:text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    {{ $talent->phone }}
                                </div>
                            </div>

                            @if ($talent->cv_path)
                                <div class="mt-4">
                                    <a href="{{ Storage::url($talent->cv_path) }}" target="_blank"
                                        class="w-full flex items-center justify-center px-4 py-2 bg-gray-50 dark:bg-gray-700/50 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 border border-gray-200 dark:border-gray-600 rounded-lg text-sm font-semibold transition-colors">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                        Lihat CV (Resume)
                                    </a>
                                </div>
                            @endif

                            <div
                                class="mt-4 text-xs text-center text-gray-400 font-medium border-t border-gray-100 dark:border-gray-700 pt-3">
                                Bergabung {{ $talent->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 text-center shadow-sm">
                            <span class="text-gray-500 dark:text-gray-400 italic">Belum ada data pendaftar talent
                                masuk.</span>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $talents->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
