<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Countdown | Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    </head>
    <body>
        <header>

        </header>
        <main>
            <h1 class="h1-center">Ramadhan 2023</h1>
            <p class="p-date">22 Mac 2023<p>
            <div class="div-timegroup">
                <div class="div-time">
                    <p class="p-time">hari</p>
                    <h1 id="time-day" class="h1-center h1-large h1-time">0</h1>
                </div>
                <div class="div-time">
                    <p class="p-time">jam</p>
                    <h1 id="time-hour" class="h1-center h1-large h1-time">0</h1>
                </div>
                <div class="div-time">
                    <p class="p-time">minit</p>
                    <h1 id="time-minute" class="h1-center h1-large h1-time">0</h1>
                </div>
                <div class="div-time">
                    <p class="p-time">saat</p>
                    <h1 id="time-second" class="h1-center h1-large h1-time">0</h1>
                </div>
            </div>
            <div class="div-note">
                <p class="p-note">semoga kita sampe ke Ramadhan kelak ❤</p>
            </div>
        </main>
        <footer class="custom-footer">
            <p><a href="https://www.mohdshahrim.com/">mohdshahrim.com</a></p>
        </footer>
    </body>
    <script>
    </script>
    <style>
        .h1-center {
            text-align: center;
        }
        .h1-large {
            font-size: 500%;
        }
        .p-date {
            margin-top: 0;
            text-align: center;
        }
        .div-timegroup {
            text-align: center;
            overflow: hidden;
        }
        .div-time {
            display: inline-block;
            text-align: center;
            width: 10em;
        }
        .h1-time {
            margin-top: 0;
            margin-bottom: 0;
        }
        .p-time {
            margin-bottom: 0;
        }
        .custom-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            border: 0;
        }
        .div-note {
            margin-top: 3em;
            text-align: center;
        }
    </style>
</html>