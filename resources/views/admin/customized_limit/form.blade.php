<div class="form-group {{ $errors->has('id_location') ? 'has-error' : ''}}">
    <label for="id_location" class="control-label">{{ 'Id Location' }}</label>
    <input class="form-control" name="id_location" type="number" id="id_location" value="{{ isset($customized_limit->id_location) ? $customized_limit->id_location : ''}}" >
    {!! $errors->first('id_location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($customized_limit->date) ? $customized_limit->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('limit') ? 'has-error' : ''}}">
    <label for="limit" class="control-label">{{ 'Limit' }}</label>
    <input class="form-control" name="limit" type="number" id="limit" value="{{ isset($customized_limit->limit) ? $customized_limit->limit : ''}}" >
    {!! $errors->first('limit', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
