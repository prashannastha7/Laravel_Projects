<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <html>
    <head>
        <title>Edit Post</title>
        <style>
            body {
                font-family: Arial;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                /*display: flex; */
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .full-screen-center {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            form {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 100%; /* Full width of the container */
                max-width: 400px; /* Adjust as needed */
            }

            h2 {
                text-align: center;
                color: #333;
            }

            label {
                display: block;
                margin-bottom: 8px;
                color: #555;
            }

            input,
            textarea {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            button {
                color: black;
                padding: 10px;
                border: solid;
                border-radius: 2px;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                background-color: greenyellow;
            }
        </style>
    </head>
    <body>

    <div class="full-screen-center">
        <div>

            <form method="POST">
                @csrf
                @method('PUT')

                <h2>Create a New Blog</h2>

                <label for="title">Title:</label>
                <input type="text"  name="title" required value="{{$post -> title}}">

                <label for="body">Body:</label>
                <textarea name="body" rows="4" required>{{$post -> body}}</textarea>

                <button type="submit">Update</button>
            </form>
            @if (session()->has('success'))
                <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">
                    {{ session('success') }}
                </div>
                @endif
        </div>
    </div>
    </body>
    </html>

</x-app-layout>
