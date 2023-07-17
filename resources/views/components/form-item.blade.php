<div class="form-group">

    {{ $slot }}

    <input {{ $attributes }}
           id="{{ $name }}"
           type="text"
           class="form-control @error('{{ $name }}') is-invalid @enderror"
           name="{{ $name }}">

    @error('{{ $name }}')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
