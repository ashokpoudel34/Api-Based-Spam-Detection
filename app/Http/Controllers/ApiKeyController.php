<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ApiKeyController extends Controller
{
    public function create(Request $request)
    {
        $user_id = Auth::id();
        $apiKey = ApiKey::generate($user_id);

        return redirect()->back()->with('success', 'API Key created: ' . $apiKey);
    }


    public function index()
    {
        $apiKeys = ApiKey::where('user_id', Auth::id())->get();
        return view('api_keys.index', compact('apiKeys'));
    }


    public function revoke($id)
    {
        ApiKey::where('key', $id)->delete();
        return redirect()->back()->with('success', 'API Key revoked');
    }

    public function Backend(Request $request)
    {
        $apiKey = $request->query('API-Key');
        $text = $request->query('text');

        // Validate the API key by checking if it exists in the table
        $validApiKey = ApiKey::where('key', $apiKey)->first();

        if (!$validApiKey) {
            return response()->json(['error' => 'Invalid API key'], 401);
        }

        $currentRouteUri = Route::current()->uri();
        if($currentRouteUri == 'whois'){
            $parsedUrl = parse_url($text);
            if (isset($parsedUrl['host'])) {
                $host = $parsedUrl['host'];
            } else {
                $host = $text;
            }
            $output = shell_exec("whois " . escapeshellarg($host));
        }elseif($currentRouteUri == 'nmap'){
            $parsedUrl = parse_url($text);
            if (isset($parsedUrl['host'])) {
                $host = $parsedUrl['host'];
            } else {
                $host = $text;
            }
            $output = shell_exec("whois " . escapeshellarg($host));
        }elseif($currentRouteUri == 'nslookup'){
            $parsedUrl = parse_url($text);
            if (isset($parsedUrl['host'])) {
                $host = $parsedUrl['host'];
            } else {
                $host = $text;
            }
            $output = shell_exec("whois " . escapeshellarg($host));
        }
        // For now, just return a success message
        return response()->json([$output]);
    }

}

