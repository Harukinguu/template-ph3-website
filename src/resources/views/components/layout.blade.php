<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
  <div class="container">
    {{-- ここにコンポーネントの中身を表示する --}}
    {{ $slot }}
  </div>
</body>
</html>