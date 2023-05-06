<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Countdown | Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    </head>
    <body>
        <header>
            {{ __("Welcome") }} {{ Auth::user()->name }}
        </header>
        <br>
        <main>
            <table>
                <tr>
                    <th>Countdown Title</th>
                    <th>Description</th>
                    <th>Date and Time</th>
                    <th>URL</th>
                    <th>Option</th>
                </tr>
                <tr>
                    <td class="table-item">Ramadhan 2024</td>
                    <td class="table-item">-</td>
                    <td class="table-item">9 May 2024 00:00</td>
                    <td class="table-item"><a href="#">link</a><button>copy</button></td>
                    <td class="table-item"><button>delete</button></td>
                </tr>
                @forelse($countdowns as $countdown)
                <tr>
                    <td>{!! $countdown->title !!}</td>
                    <td>{!! $countdown->title !!}</td>
                    <td>{!! $countdown->title !!}</td>
                    <td>{!! $countdown->title !!}</td>
                    <td>{!! $countdown->title !!}</td>
                @empty
                <tr>
                    <td colspan="3">No products found</td>
                </tr>
                @endforelse
            </table>
            <button>Create new</button>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
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

        /* dashboard area */
        .table-item {
            vertical-align: middle;
        }
    </style>
</html>
