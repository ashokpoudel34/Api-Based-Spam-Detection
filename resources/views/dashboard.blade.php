<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('API Key Usage Instructions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __('How to Use Your API Key') }}</h3>
                    <p>{{ __('Include your API key in the request header as follows:') }}</p>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
GET /api/endpoint
Host: api.blossomcosmetics.shop
X-API-KEY: {{ $apiKey }}
</code>
                    </pre>

                    <h3 class="text-lg font-medium mt-4">{{ __('Implementation Examples') }}</h3>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using cURL') }}</h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
curl -X GET https://api.blossomcosmetics.shop/endpoint \\
-H "X-API-KEY: {{ $apiKey }}"
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using Python Requests') }}</h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
import requests

url = 'https://api.blossomcosmetics.shop/endpoint'
headers = {
    'X-API-KEY': '{{ $apiKey }}'
}

response = requests.get(url, headers=headers)
print(response.json())
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using JavaScript Fetch') }}</h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
fetch('https://api.blossomcosmetics.shop/endpoint', {
    method: 'GET',
    headers: {
        'X-API-KEY': '{{ $apiKey }}'
    }
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using Axios (JavaScript)') }}</h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
const axios = require('axios');

axios.get('https://api.blossomcosmetics.shop/endpoint', {
    headers: {
        'X-API-KEY': '{{ $apiKey }}'
    }
})
.then(response => {
    console.log(response.data);
})
.catch(error => {
    console.error('Error:', error);
});
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
