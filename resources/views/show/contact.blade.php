<x-app-layout>
    <section>
        <div>
            <div class="header text-center py-2.5">
                <h1 class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950)">
                    List My Client
                </h1>
                <p class="mt-3 text-xl md:text-2xl text-(--color-primary-900)">
                    semua yg di bwh ini adalah client
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2.5">
                @if ($costumers->isEmpty())
                    <p>Belum ada Client.</p>
                @else
                    @foreach ($costumers as $costumer)
                        <div class="card">
                            <div class="p-2 gap-2 flex flex-col">
                                <span
                                    class="text-(--color-primary-950) font-bold text-2xl">{{ $costumer->username }}</span>
                                <div class="flex text-(--color-primary-600)">
                                    <span>{{ $costumer->email }}</span>
                                    <span> - </span>
                                    <span>{{ $costumer->phone }}</span>
                                </div>
                                <span
                                    class="text-(--color-primary-950) font-bold text-xl">{{ $costumer->category }}</span>
                                <span class="text-base p-2.5">{{ $costumer->message }}</span>
                            </div>
                            <div class="p-2 grid grid-cols-2 gap-2">
                                <button
                                    class="w-full rounded-2xl p-2.5 border-2 border-(--color-primary-800) bg-(--color-primary-800) text-(--color-primary-50) hover:bg-(--color-primary-950) hover:border-(--color-primary-950) transition-all duration-300">terima</button>
                                <form action="{{ route('costumer.destroy', $costumers->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus costumer ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full rounded-2xl p-2.5 border-2 border-(--color-primary-950) text-(--color-primary-950) hover:bg-(--color-primary-600) hover:text-(--color-primary-50) hover:border-(--color-primary-600) transition-all duration-300">tolak
                                    </button>
                                </form>
                                <button
                                    class="w-full rounded-2xl p-2.5 border-2 border-(--color-primary-950) text-(--color-primary-950) hover:bg-(--color-primary-600) hover:text-(--color-primary-50) hover:border-(--color-primary-600) transition-all duration-300">tolak
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
