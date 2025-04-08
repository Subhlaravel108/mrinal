<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon - Mrinal Technosoft</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: #fff;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 20px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .countdown {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D02JV7H7EK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D02JV7H7EK');
</script>
</head>
<body>
    <div class="container">
        <h1>Coming Soon</h1>
        <p>Our website is under construction. We’ll be launching soon!</p>
        <div class="countdown" id="countdown"></div>
    </div>

    <script>
        function countdownTimer() {
            const launchDate = new Date("2024-07-01T00:00:00").getTime();
            const timer = setInterval(function() {
                const now = new Date().getTime();
                const timeLeft = launchDate - now;

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

                if (timeLeft < 0) {
                    clearInterval(timer);
                    document.getElementById("countdown").innerHTML = "We're Live!";
                }
            }, 1000);
        }
        countdownTimer();
    </script>
</body>
</html>