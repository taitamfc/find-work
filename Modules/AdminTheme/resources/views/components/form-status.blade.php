<select class="form-control dropdown-toggle" name="status">
    @if($showAll)
    <option value="">All statuses</option>
    @endif
    <option value="{{ $model::INACTIVE }}" @selected( $status == $model::INACTIVE )>{{ __('sys.inactive') }}</option>
    <option value="{{ $model::ACTIVE }}" @selected( $status == $model::ACTIVE )>{{ __('sys.active') }}</option>
    <option value="{{ $model::DRAFT }}" @selected( $status == $model::DRAFT )>{{ __('sys.draf') }}</option>
</select>