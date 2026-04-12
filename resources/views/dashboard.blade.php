<x-app-layout>

    {{-- STATS SECTION --}}
    @if(isset($stats))
        <section class="p-2.5 md:p-5 pb-0">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
                {{-- Total Pesan Masuk --}}
                <div class="card p-3 md:p-4 flex items-center gap-3">
                    <div class="bg-(--color-primary-400) text-(--color-primary-950) p-2.5 rounded-xl shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-(--color-primary-950)">{{ $stats['total_contacts'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Total Pesan</p>
                    </div>
                </div>

                {{-- Total Talent --}}
                <div class="card p-3 md:p-4 flex items-center gap-3">
                    <div class="bg-(--color-primary-400) text-(--color-primary-950) p-2.5 rounded-xl shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-(--color-primary-950)">{{ $stats['total_talents'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Talent Mendaftar</p>
                    </div>
                </div>

                {{-- Talent Belum Dibaca --}}
                <div class="card p-3 md:p-4 flex items-center gap-3">
                    <div class="bg-amber-100 text-amber-700 p-2.5 rounded-xl shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-amber-700">{{ $stats['unread_talents'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Talent Belum Dibaca</p>
                    </div>
                </div>

                {{-- User Pending Approval --}}
                <div class="card p-3 md:p-4 flex items-center gap-3">
                    <div class="bg-indigo-100 text-indigo-700 p-2.5 rounded-xl shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-indigo-700">{{ $stats['pending_users'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Menunggu Approval</p>
                    </div>
                </div>
            </div>

            {{-- Recent Activity --}}
            @if($stats['recent_talents']->isNotEmpty() || $stats['recent_contacts']->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">

                    {{-- Talent Terbaru --}}
                    @if($stats['recent_talents']->isNotEmpty())
                        <div class="card p-4">
                            <h3 class="font-bold text-(--color-primary-950) mb-3 flex items-center gap-2">
                                <span class="text-lg">🎯</span> Talent Terbaru
                            </h3>
                            <div class="space-y-2">
                                @foreach($stats['recent_talents'] as $talent)
                                    <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                                        <div>
                                            <p class="font-semibold text-sm text-(--color-primary-950)">{{ $talent->name }}</p>
                                            <p class="text-xs text-gray-500">{{ $talent->skill_label }}</p>
                                        </div>
                                        <div class="text-right">
                                            <span
                                                class="text-xs {{ $talent->read_at ? 'text-green-600' : 'text-amber-500 font-medium' }}">
                                                {{ $talent->read_at ? '✓ Dibaca' : '● Baru' }}
                                            </span>
                                            <p class="text-xs text-gray-400">{{ $talent->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Pesan Terbaru --}}
                    @if($stats['recent_contacts']->isNotEmpty())
                        <div class="card p-4">
                            <h3 class="font-bold text-(--color-primary-950) mb-3 flex items-center gap-2">
                                <span class="text-lg">📬</span> Pesan Terbaru
                            </h3>
                            <div class="space-y-2">
                                @foreach($stats['recent_contacts'] as $contact)
                                    <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                                        <div>
                                            <p class="font-semibold text-sm text-(--color-primary-950)">{{ $contact->username }}</p>
                                            <p class="text-xs text-gray-500">{{ Str::limit($contact->message, 40) }}</p>
                                        </div>
                                        <p class="text-xs text-gray-400 shrink-0 ml-2">{{ $contact->created_at->diffForHumans() }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </section>
    @endif
</x-app-layout>