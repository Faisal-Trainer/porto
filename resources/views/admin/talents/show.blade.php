<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ route('admin.talents.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Daftar
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <div class="p-8">
                    <div class="flex items-center space-x-6 mb-8 pb-8 border-b border-gray-100 dark:border-gray-700">
                        <div class="w-20 h-20 bg-linear-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-white font-bold text-3xl shadow-lg">
                            {{ strtoupper(substr($talent->name, 0, 1)) }}
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ $talent->name }}</h1>
                            <p class="text-lg text-indigo-600 dark:text-indigo-400 font-medium">{{ $talent->skill }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Kontak</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{ $talent->email }}</p>
                                <p class="text-gray-700 dark:text-gray-300">{{ $talent->phone }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Pengalaman & Ketersediaan</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{ $talent->experience }} Tahun</p>
                                <p class="text-gray-700 dark:text-gray-300">{{ ucfirst($talent->availability) }}</p>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Bio / Tentang Diri</h3>
                            <div class="bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl text-gray-700 dark:text-gray-300 italic whitespace-pre-line">
                                {{ $talent->bio }}
                            </div>
                        </div>
                    </div>

                    @if ($talent->cv_path)
                        <div class="mt-8 flex justify-center">
                            <a href="{{ route('admin.talents.download-cv', $talent) }}" 
                                class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg transition-all transform hover:-translate-y-0.5">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                Download Curriculum Vitae (CV)
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
