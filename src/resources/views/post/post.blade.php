<x-layout>
  <x-slot name='title'>
    MyBBS
  </x-slot>


  <h1>
    <span>MyBBS</span>
    <a href="{{ route('post.create')}}">Add</a>
  </h1>
  <ul>
      @forelse ($posts as $post)
        <li>
          <a href="{{ route('post.show' , $post) }}">
            {{ $post->title }}
          </a>
        </li>
      @empty
        <li>まだ投稿はありません。</li>
      @endforelse
  </ul>
</x-layout>
