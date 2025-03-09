<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Security Analysis Tool</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 600px;
      text-align: center;
    }
    h1 {
      color: #333;
    }
    .description {
      margin: 20px 0;
      font-size: 16px;
      color: #555;
    }
    nav {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    nav a {
      padding: 10px 15px;
      border-radius: 4px;
      margin: 5px;
      text-decoration: none;
      color: #fff;
      background-color: #007BFF;
      transition: background-color 0.3s;
    }
    nav a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Welcome to Security Analysis Tool</h1>
    <p class="description">This project provides a set of security tools, including Nmap, Whois, Nslookup, and TheHarvester, for analyzing and testing network security. Sign in or register to access the tools.</p>
    
    @if (Route::has('login'))
      <nav>
        @auth
          <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
          <a href="{{ route('login') }}">Log in</a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </nav>
    @endif
  </div>

</body>
</html>
