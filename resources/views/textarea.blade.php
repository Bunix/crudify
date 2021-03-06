<li class="list-group-item py-3">
    <div class="row">
        <label for="{{ $id }}" class="col-form-label col-md-2">{{ $label }}</label>
        <div class="col-md">
            <textarea name="{{ $name }}" id="{{ $id }}" class="form-control @error($name) is-invalid @enderror" rows="{{ $rows }}">{{ $value }}</textarea>
            @error($name) <span class="invalid-feedback font-weight-bold">{{ $message }}</span> @enderror
        </div>
    </div>
</li>
