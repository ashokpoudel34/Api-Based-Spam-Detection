<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('API Keys') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __('Your API Keys') }}</h3>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('api_keys.create') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-4">{{ __('Generate API Key') }}</button>
                    </form>
                    <ul class="mt-4">
                        @foreach ($apiKeys as $key)
                            <li class="flex justify-between items-center p-2 border-b border-gray-200 dark:border-gray-700">
                                <span>{{ $key->key }}</span>
                                <form action="{{ route('api_keys.revoke', $key->key) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('Revoke') }}</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
