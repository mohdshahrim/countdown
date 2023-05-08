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
                <thead>
                    <tr>
                        <th>Countdown Title</th>
                        <th>Description</th>
                        <th>Date and Time</th>
                        <th>URL</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-item">Ramadhan 2024</td>
                        <td class="table-item">-</td>
                        <td class="table-item">9 May 2024 00:00</td>
                        <td class="table-item"><a target="_blank" href="https://countdown.mohdshahrim.com">link</a>&nbsp;<button class="button-small">copy</button></td>
                        <td class="table-item" style="color: red; font-size: small;">Example. Cannot delete.</td>
                    </tr>
                    @forelse($countdowns as $countdown)
                    <tr>
                        <td class="table-item">{{ $countdown->title }}</td>
                        <td class="table-item">{{ $countdown->description }}</td>
                        <td class="table-item">@php echo date('j F Y, g:i A', strtotime($countdown->datetime)) @endphp</td>
                        <td class="table-item"><a target="_blank" href="/countdown/{{ $countdown->urlsuffix }}">link</a>&nbsp;<button class="button-small">copy</button></td>
                        <td class="table-item">
                            <form class="" action="/delete/{{$countdown->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="button-small">Delete</button>
                            </form>
                        </td>
                    @empty
                    <tr>
                        <td colspan="3">No products found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Create new Countdown (modal pop up) -->
            <button id="dialog-trigger">Create new</button>

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
        <dialog id="dialog" closed>
            <header>Create new Countdown</header>
            <form method="POST" action="/create">
                <label>Title</label>
                <input type="text" name="title"/>
                <br>

                <label>Description (optional)</label>
                <textarea name="description"></textarea>
                <br>

                <label>Date Time</label>
                <input type="datetime-local" name="datetime"/>
                <br>
                @csrf
                @method('POST')
                <button type="submit">Okay</button>
            </form>
        </dialog>
    </body>
    <script>
        document.getElementById('dialog-trigger').addEventListener('click', () => {
            document.getElementById('dialog').showModal()
        })

        document.getElementById('dialog').addEventListener('close', (event) => {
            document.getElementById('dialog-result').innerText = `Your answer: ${event.target.returnValue}`
        })
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
        .button-small {
            padding: 0.2em;
            font-size: smaller;
            background-color: darkcyan !important;
        }
    </style>
</html>
