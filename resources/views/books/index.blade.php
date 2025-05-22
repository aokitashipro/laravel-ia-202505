<h1>index</h1>
@if (session('flash_message'))
  <div class="flash_message">
      {{ session('flash_message') }}
  </div>
@endif


<a href="{{ route('books.create')}}">新規作成</a>

 複数形 as 単数形
@foreach($books as $book)
<a href="/books/{{$book->id}}">{{ $book->id }}</a>
{{ $book->title }}
@endforeach