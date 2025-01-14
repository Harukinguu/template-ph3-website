<x-layout>
  <x-slot name='title'>
    Add New Post - MyBBS
  </x-slot>

  <div class="back-link">
    &laquo; <a href="{{ route('post.index') }}">投稿一覧へ戻る</a>
  </div>
  <h1>Add New Post</h1>
  <form method="post" action="{{ route('post.store') }}">
    @csrf

    <div class="form-group">
      <label>
        Title
        <input type="text" name="title" value="{{old('title')}}">
      </label>
      @error('title')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>
        Body
        <textarea name="body">{{old('body')}}</textarea>
      </label>
      @error('body')
      <div class="error">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-button">
      <button>Add</button>
    </div>
  </form>
</x-layout>