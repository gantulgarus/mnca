<div class="mb-3">
    <label>Материалын нэр</label>
    <input type="text" name="material_name" class="form-control"
        value="{{ old('material_name', $price->material_name ?? '') }}">
</div>

<div class="mb-3">
    <label>Үнэ</label>
    <input type="number" name="price" class="form-control" step="0.01"
        value="{{ old('price', $price->price ?? '') }}">
</div>

<div class="mb-3">
    <label>Хувь</label>
    <input type="number" name="percentage_change" class="form-control" step="0.01"
        value="{{ old('percentage_change', $price->percentage_change ?? '') }}">
</div>

<div class="mb-3">
    <label>Хандлага</label>
    <select name="trend" class="form-control">
        <option value="up" {{ old('trend', $price->trend ?? '') == 'up' ? 'selected' : '' }}>Өссөн</option>
        <option value="down" {{ old('trend', $price->trend ?? '') == 'down' ? 'selected' : '' }}>Буурсан</option>
        <option value="no_change" {{ old('trend', $price->trend ?? '') == 'no_change' ? 'selected' : '' }}>Өөрчлөлтгүй
        </option>
    </select>
</div>

<div class="mb-3">
    <label>Огноо</label>
    <input type="date" name="date" class="form-control"
        value="{{ old('date', $price->date ?? now()->toDateString()) }}">
</div>

<button type="submit" class="btn btn-success">Хадгалах</button>
