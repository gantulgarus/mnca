@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Мэдээний жагсаалт</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">+ Шинэ мэдээ</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Гарчиг</th>
                    <th>Ангилал</th>
                    <th>Огноо</th>
                    <th>Зураг</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($post->published_at)->format('Y/m/d') }}</td>
                        <td>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" width="100">
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">Засах</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block"
                                onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
