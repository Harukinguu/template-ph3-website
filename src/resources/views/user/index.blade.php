<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>ユーザー一覧</h1>
  <ul>
    @forelse ($users as $user)
      <li>{{ $user->name }}</li>
    @empty
      <li>ユーザーがいません。</li>
    @endforelse
  </ul>
  <table>
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>作成日時</th>
    </tr>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>