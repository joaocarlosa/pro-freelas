<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Implement Social Share Button in Laravel</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('js/share-buttons.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        div#social-links ul li {
            display: inline-block;
        }

        div#social-links ul li a {
            padding: 20px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
            color: #222;
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-5 text-center">Laravel Social Share Buttons Example</h2>

        {!! html_entity_decode(ShareButtons::page(url()->current(), '', [
            'title' => 'Page title',
            'rel' => 'nofollow noopener noreferrer',
        ])->facebook()->linkedin()->whatsapp()->mailto()->render()) !!}

    </div>
</body>

</html>
