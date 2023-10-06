<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>クイズ一覧</h1>
  <ul>
    @foreach ($quizzes as $quiz)
      <li>
        <a href="{{ route('user.q_show' , $quiz->id) }}">
          {{ $quiz->name }}
        </a>
      </li>
    @endforeach
</body>
</html>