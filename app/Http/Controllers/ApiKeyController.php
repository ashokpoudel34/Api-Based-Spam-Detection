<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function detectSpam(Request $request)
    {
        $apiKey = $request->query('API-Key');
        $text = $request->query('text');

        // Validate the API key by checking if it exists in the table
        $validApiKey = ApiKey::where('key', $apiKey)->first();

        if (!$validApiKey) {
            return response()->json(['error' => 'Invalid API key'], 401);
        }

        $whoisOutput = shell_exec("whois " . escapeshellarg($text));

        // For now, just return a success message
        return response()->json([$whoisOutput]);
    }
}

