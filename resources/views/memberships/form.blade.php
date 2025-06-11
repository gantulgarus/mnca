<div class="mb-3">
    <label class="form-label">Байгууллагын нэр</label>
    <input type="text" name="organization_name" class="form-control"
        value="{{ old('organization_name', $membership->organization_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Хаяг</label>
    <input type="text" name="address" class="form-control" value="{{ old('address', $membership->address ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Утас</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $membership->phone ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Имэйл</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $membership->email ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Веб сайт</label>
    <input type="url" name="website" class="form-control" value="{{ old('website', $membership->website ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Facebook</label>
    <input type="url" name="facebook" class="form-control"
        value="{{ old('facebook', $membership->facebook ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Twitter</label>
    <input type="url" name="twitter" class="form-control" value="{{ old('twitter', $membership->twitter ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">YouTube</label>
    <input type="url" name="youtube" class="form-control" value="{{ old('youtube', $membership->youtube ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Байгууллагын лого</label>
    <input type="file" name="logo" class="form-control">
    @if (isset($membership) && $membership->logo)
        <img src="{{ asset('storage/' . $membership->logo) }}" alt="Лого" class="img-thumbnail mt-2" width="150">
    @endif
</div>
