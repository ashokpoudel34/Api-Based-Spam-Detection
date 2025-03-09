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

                    <h3 class="text-lg font-medium mt-4">{{ __('Available Endpoints') }}</h3>
                    <ul>
                        <li><strong>Nmap:</strong> <code>/nmap</code></li>
                        <li><strong>Whois:</strong> <code>/whois</code></li>
                        <li><strong>Nslookup:</strong> <code>/nslookup</code></li>
                        <li><strong>TheHarvester:</strong> <code>/theHarvester</code></li>
                    </ul>

                    <h3 class="text-lg font-medium mt-4">{{ __('Command-Line Usage Examples') }}</h3>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using cURL') }}</h4>
                    <p>{{ __('Replace {endpoint} with the desired endpoint (nmap, whois, nslookup, theHarvester) and {target} with your target domain or IP.') }}</p>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
curl -L -X GET "https://nmap.ransomewatch.online/{endpoint}?text={target}&API-Key=YOUR_API_KEY"
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4">{{ __('Using Python Requests') }}</h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
import requests

api_key = "{{ $apiKey }}"
endpoint = "nmap"  # Change to whois, nslookup, or theHarvester as needed
target = "example.com"  # Replace with the target domain or IP

url = f"https://nmap.ransomewatch.online/{endpoint}?text={target}&API-Key={api_key}"

response = requests.get(url)
print(response.json())
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
