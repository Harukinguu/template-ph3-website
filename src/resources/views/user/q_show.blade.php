<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/q_show.css')}}">
  <title>Document</title>
</head>
<body>
  <h1>{{ $quiz->name }}</h1>
  <ul>
    @forelse ($questions as $question)
        <li>{{ $question->text}}</li>
    @empty
        <li>問題なし</li>
    @endforelse
  </ul>
  <table>
    <tr>
      <th>問題</th>
      <th>答え</th>
    </tr>
    @foreach ($questions as $question)
      @foreach ($question->choices as $choice)
        <tr>
          <td>{{ $question->text }}</td>
          <td class="answer-{{ $choice->is_correct }}">{{ $choice->text }}</td>
        </tr> 
      @endforeach
    @endforeach
  </table>
</body>

{{-- <script>
  // const choice = @json($questions->choice);
</script> --}}

<script src="{{ asset('js/q_show.js') }}"></script>
</html>