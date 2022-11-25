<div class="form-group {{ $errors->has('id_location_time') ? 'has-error' : ''}}">
    <label for="id_location_time" class="control-label">{{ 'Id Location Time' }}</label>
    <input class="form-control" name="id_location_time" type="number" id="id_location_time" value="{{ isset($location_time->id_location_time) ? $location_time->id_location_time : ''}}" >
    {!! $errors->first('id_location_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_location') ? 'has-error' : ''}}">
    <label for="id_location" class="control-label">{{ 'Id Location' }}</label>
    <input class="form-control" name="id_location" type="number" id="id_location" value="{{ isset($location_time->id_location) ? $location_time->id_location : ''}}" >
    {!! $errors->first('id_location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_time') ? 'has-error' : ''}}">
    <label for="id_time" class="control-label">{{ 'Id Time' }}</label>
    <input class="form-control" name="id_time" type="number" id="id_time" value="{{ isset($location_time->id_time) ? $location_time->id_time : ''}}" >
    {!! $errors->first('id_time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
