@extends('layouts.admin')

@section('content')
    <h2>Хүний нөөц нэмэх</h2>

    <form action="{{ route('human-resources.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Алба</label>
            <select name="department_id" class="form-select" required>
                <option value="">Сонгох</option>
                @foreach ($departments as $dept)
                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Нэр</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Албан тушаал</label>
            <input type="text" name="position" class="form-control" required>
        </div>



        <div class="mb-3">
            <label class="form-label">Байгууллага</label>
            <input type="text" name="company" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Зураг</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Хадгалах</button>
        <a href="{{ route('human-resources.index') }}" class="btn btn-secondary">Буцах</a>
    </form>
@endsection
