<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Countdown | {{$countdowns->title}}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    </head>
    <body id="thebody">
        <header>

        </header>
        <main>
            <h1 class="h1-center">{{$countdowns->title}}</h1>
            <p class="p-date">@php echo date('j F Y, g:i A', strtotime($countdowns->datetime)) @endphp<p>
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
                <p id="p-note" class="p-note">{{$countdowns->description}}</p>
            </div>
        </main>
        <footer class="custom-footer">
            <p><a href="/dashboard">mohdshahrim.com</a></p>
        </footer>
    </body>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{$countdowns->datetime}}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("time-day").innerHTML = days;
            document.getElementById("time-hour").innerHTML = hours;
            document.getElementById("time-minute").innerHTML = minutes;
            document.getElementById("time-second").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("time-day").innerHTML = "0";
                document.getElementById("time-hour").innerHTML = "0";
                document.getElementById("time-minute").innerHTML = "0";
                document.getElementById("time-second").innerHTML = "0";
                document.getElementById("time-day").classList.add('blink_me');
                document.getElementById("time-hour").classList.add('blink_me');
                document.getElementById("time-minute").classList.add('blink_me');
                document.getElementById("time-second").classList.add('blink_me');
                document.getElementById("p-note").innerHTML = "This countdown has ended";
            }
        }, 1000);
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
        .blink_me {
            animation: blinker 1s linear infinite;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
</html>