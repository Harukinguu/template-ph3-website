<x-layout>
  <x-slot name='title'>
    {{ $post->title }} - MyBBS
  </x-slot>

  <div class="back-link">
    &laquo; <a href="{{ route('post.index') }}">投稿一覧へ戻る</a>
  </div>
  <h1>
    <span>{{ $post->title }}</span>
    <a href="{{ route('post.edit', $post) }}">[Edit]</a>
    <form method='post' action="{{ route('post.destroy' , $post) }}" id="delete_post">
      @method('DELETE')
      @csrf

      <button class="btn">[x]</button>
    </form>
  </h1>
  <p>{!! nl2br(e($post->body)) !!}</p>

  <h2>Comments</h2>
  <ul>
    <li>
      <form method="post" action="{{ route('comment.store' , $post) }}" class="comment-form">
        @csrf

        <input type="text" name="body">
        <button>Add</button>
      </form>
    </li>
    @forelse($post->comments()->latest()->get() as $comment)
      <li>
        {{ $comment->body }}
        <form method="post" action="{{ route('comment.destroy' , $comment) }}" class="delete-comment">
          @method('DELETE')
          @csrf

          <button class="btn">[x]</button>
        </form>
      </li>
    @empty
      <li>No comments yet</li>
    @endforelse
  </ul>

  <script>
    'use strict';

    {
      document.getElementById('delete_post').addEventListener('submit' , e => {
        e.preventDefault();

        if(!confirm('削除すると復元できません。\n本当に削除しますか？')){
          return;
        }

        e.target.submit();
      });

      document.querySelectorAll('.delete-comment').foreach(form => {
        form.addEventListener('submit' , e => {
          e.preventDefault();

          if(!confirm('Sure to delete?')){
            return;
          }

          form.submit();
        });
      });
    }
  </script>
</x-layout>