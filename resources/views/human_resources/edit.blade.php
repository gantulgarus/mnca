@extends('layouts.admin')

@section('content')
    <h2>Хүний нөөц засах</h2>

    <form action="{{ route('human-resources.update', $humanResource->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Алба</label>
            <select name="department_id" class="form-select" required>
                @foreach ($departments as $dept)
                    <option value="{{ $dept->id }}" {{ $humanResource->department_id == $dept->id ? 'selected' : '' }}>
                        {{ $dept->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Нэр</label>
            <input type="text" name="name" class="form-control" value="{{ $humanResource->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Албан тушаал</label>
            <input type="text" name="position" class="form-control" value="{{ $humanResource->position }}" required>
        </div>



        <div class="mb-3">
            <label class="form-label">Байгууллага</label>
            <input type="text" name="company" class="form-control" value="{{ $humanResource->company }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Зураг</label><br>
            @if ($humanResource->photo)
                <img src="{{ asset($humanResource->photo) }}" width="80" height="80" class="mb-2 rounded">
            @endif
            <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Шинэчлэх</button>
        <a href="{{ route('human-resources.index') }}" class="btn btn-secondary">Буцах</a>
    </form>
@endsection
