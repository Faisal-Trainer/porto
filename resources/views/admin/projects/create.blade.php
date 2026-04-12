<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Tambah Project Baru</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Silakan isi formulir di bawah untuk menambahkan portofolio baru.</p>
                </div>
                <a href="{{ route('admin.projects.index') }}" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 flex items-center gap-1 font-semibold text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 border border-gray-100 dark:border-gray-700">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Judul --}}
                        <div class="col-span-2">
                            <label for="judul" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Judul Project</label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul') }}" placeholder="Contoh: My Awesome App" 
                                class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 @error('judul') border-red-500 @enderror">
                            @error('judul') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Kategori --}}
                        <div>
                            <label for="kategori" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Kategori</label>
                            <select name="kategori" id="kategori" class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 @error('kategori') border-red-500 @enderror">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="web_application" {{ old('kategori') == 'web_application' ? 'selected' : '' }}>Web Application</option>
                                <option value="education" {{ old('kategori') == 'education' ? 'selected' : '' }}>Education</option>
                                <option value="social_media" {{ old('kategori') == 'social_media' ? 'selected' : '' }}>Social Media</option>
                                <option value="it_support" {{ old('kategori') == 'it_support' ? 'selected' : '' }}>IT Support</option>
                                <option value="dashboard" {{ old('kategori') == 'dashboard' ? 'selected' : '' }}>Dashboard</option>
                            </select>
                            @error('kategori') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Tanggal Rilis --}}
                        <div>
                            <label for="tanggal_rilis" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Tanggal Rilis</label>
                            <input type="date" name="tanggal_rilis" id="tanggal_rilis" value="{{ old('tanggal_rilis') }}"
                                class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 @error('tanggal_rilis') border-red-500 @enderror">
                            @error('tanggal_rilis') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Demo URL --}}
                        <div class="col-span-2">
                            <label for="demo_url" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">URL Demo (Opsional)</label>
                            <input type="url" name="demo_url" id="demo_url" value="{{ old('demo_url') }}" placeholder="https://demo.example.com"
                                class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 @error('demo_url') border-red-500 @enderror">
                            @error('demo_url') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="col-span-2">
                            <label for="deskripsi" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" placeholder="Ceritakan tentang project ini..."
                                class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Thumbnail --}}
                        <div class="col-span-2">
                            <label for="thumbnail" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Thumbnail Project</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 dark:border-gray-700 border-dashed rounded-xl bg-gray-50 dark:bg-gray-900">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600 dark:text-gray-400">
                                        <label for="thumbnail" class="relative cursor-pointer bg-white dark:bg-gray-800 rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="thumbnail" name="thumbnail" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                </div>
                            </div>
                            @error('thumbnail') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        {{-- Technologies --}}
                        <div class="col-span-2">
                            <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-4">Teknologi yang Digunakan</label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                                @foreach($technologies as $tech)
                                    <label class="relative flex items-center p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                                        <input type="checkbox" name="technologies[]" value="{{ $tech->id }}" class="rounded text-indigo-600 focus:ring-indigo-500 mr-3">
                                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ $tech->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                            @error('technologies') <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 dark:border-gray-700 flex justify-end gap-3">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg shadow-indigo-200 dark:shadow-none">
                            Simpan Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
