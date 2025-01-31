<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spam Text Tester</title>
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
    form {
      margin: 20px 0;
    }
    textarea {
      width: 100%;
      height: 120px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }
    button:hover {
      background-color: #45a049;
    }
    .developer-info {
      margin-top: 30px;
      background-color: #e9f7ef;
      padding: 15px;
      border-radius: 4px;
    }
    .developer-info a {
      color: #4CAF50;
      text-decoration: none;
    }
    .developer-info a:hover {
      text-decoration: underline;
    }
    /* Custom navigation bar styles */
    nav {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 20px;
    }
    nav a {
      padding: 8px 15px;
      border-radius: 4px;
      margin-left: 10px;
      text-decoration: none;
      color: #333;
      background-color: #f4f4f9;
      transition: background-color 0.3s, color 0.3s;
    }
    nav a:hover {
      background-color: #FF2D20;
      color: white;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Navigation Bar with login/register/dashboard links -->
    <?php if(Route::has('login')): ?>
      <nav>
        <?php if(auth()->guard()->check()): ?>
          <a href="<?php echo e(url('/dashboard')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Dashboard
          </a>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Log in
          </a>

          <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Register
            </a>
          <?php endif; ?>
        <?php endif; ?>
      </nav>
    <?php endif; ?>

    <h1>Spam Text Tester</h1>
    <p>Enter the text below to test if it is likely to be spam:</p>
    <form id="spam-form">
      <textarea id="user-text" placeholder="Enter text to check..." required></textarea><br>
      <button type="submit">Test Text</button>
    </form>

    <div id="result" style="display: none;">
      <h3>Result:</h3>
      <p id="spam-result"></p>
    </div>

    <div class="developer-info">
      <h3>For Developers:</h3>
      <p>If you're a developer, sign up to use our API to check spam text in your applications. <a href="https://example.com/signup" target="_blank">Sign up here</a>.</p>
    </div>
  </div>

  <script>
    document.getElementById('spam-form').addEventListener('submit', function(event) {
      event.preventDefault();
      const userText = document.getElementById('user-text').value;

      // Here you would integrate with your API
      // For now, we're just simulating a basic check
      const isSpam = userText.toLowerCase().includes('win') || userText.toLowerCase().includes('free');
      
      const resultDiv = document.getElementById('result');
      const spamResult = document.getElementById('spam-result');
      
      resultDiv.style.display = 'block';
      spamResult.textContent = isSpam ? 'This text appears to be spam.' : 'This text does not appear to be spam.';
    });
  </script>

</body>
</html>
<?php /**PATH C:\Users\2403032010047\Documents\Api-Based-Spam-Detection\resources\views/welcome.blade.php ENDPATH**/ ?>