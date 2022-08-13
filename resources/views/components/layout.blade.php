<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0,
        maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  <title>{{ $title ?? 'つぶやきアプリ' }}</title>
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>
</html>