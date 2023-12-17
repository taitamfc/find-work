<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('admintaxonomy.index') }}" class="btn btn-danger px-4">{{ __('admintaxonomy::form.discard') }}</a>
            <button type="submit" name="save_draf" class="btn btn-success px-4">{{ __('admintaxonomy::form.save_draft') }}</button>
            <button type="submit" class="btn btn-primary px-4">{{ __('admintaxonomy::form.publish') }}</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <label class="mb-3">{{ __('admintaxonomy::form.image') }}</label>
            <input class="form-control" name="image" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>