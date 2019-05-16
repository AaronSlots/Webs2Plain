<div class="form-group row">
    <label for="{{ $varname }}" class="col-md-4 col-form-label text-md-right">{{ __('forms/attributes.'.$varname).':' }}</label>

    <div class="col-md-6">
        @yield('form-content-attribute-'.$varname)

        @error($varname)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>