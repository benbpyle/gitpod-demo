<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
body,
html {
    width: 100%;
    height: 100%;
}

header {
    background-color: #D8D8D8;
    height: 20px;
    padding: 10px;
    font-size: large;
    font-weight: bold;
}

main {
    background-color: white;
    height: 100%;
    width: 100%;
    padding-left: 10px;
    position: relative;
}

@media screen and (max-width: 1279px) {
    main {
        overflow: scroll;
        padding-left: 0;
        background-color: purple;
    }
}

footer {
    position: fixed;
    bottom: 0;
    height: 50px;
    background-color: #D8D8D8;
    width: 100%;
}
    </style>
</head>

<body>

    <header>
        Laravel/Gitpod Demo
    </header>
    <main>
        <section>

            <table class="table">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>

                @foreach ($todos as $todo)
                <tr>
                    <td> {{ $todo->id }} </td>
                    <td> {{ $todo->name }} </td>
                    <td> {{ $todo->description }} </td>
                    <td> {{ $todo->created_at }} </td>
                    <td> {{ $todo->updated_at }} </td>
                </tr>
                @endforeach
            </table>


        </section>
    </main>
    <footer></footer>
</body>

</html>