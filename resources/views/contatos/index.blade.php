<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($contatos as $contato)
                        <div class="mb-4">
                            <a href="{{ route('contatos.show', $contato->id) }}" class="hover:bg-blue-900 hover:white hover:text-white rounded-md px-2 py-1">
                            <strong>{{ $contato->nome }}</strong></a> -
                            <a href="mailto:{{ $contato->email }}" class="hover:underline to-blue-950">{{ $contato->email }}</a><br>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
