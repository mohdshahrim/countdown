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
            <h1 class="h1-center">Countdown</h1>
            <p class="p-date">make your event counts<p>
            <div class="div-timegroup">
                <table>
                    <tr>
                        <td style="text-align: center">
                            <h2>login</h2>
                            <p class="text-small">or register, if you haven't</p>
                        </td>
                        <td style="text-align: center">
                            <h2>create countdown</h2>
                            <p class="text-small">name your event, and give description</p>
                        </td>
                        <td style="text-align: center">
                            <h2>share</h2>
                            <p class="text-small">a shareable link will be produced</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="div-note">
                <p>See examples:</p>
                <p><a target="_blank" href="https://countdown.mohdshahrim.com">Ramadhan 2024 countdown</a></p>
                <p><a target="_blank" href="https://countdown.mohdshahrim.com/strava2022">Strava Virtual Run</a></p>
            </div>

            <div class="div-note">
                <form action="/login" class="form-display">
                    <button>login</button>
                </form>
                <form action="/register" class="form-display">
                    <button>register</button>
                </form>
            </div>

            <div class="div-note">
                <p class="p-note">made with Laravel ❤</p>
            </div>
        </main>
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

        /* for welcome page */
        .text-small {
            font-size: smaller;
        }
        .form-display {
            display: inline-block;
        }
    </style>
</html>