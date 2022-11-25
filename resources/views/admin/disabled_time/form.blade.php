<div class="form-group {{ $errors->has('id_location_time') ? 'has-error' : ''}}">
    <label for="id_location_time" class="control-label">{{ 'Id Location Time' }}</label>
    <input class="form-control" name="id_location_time" type="number" id="id_location_time" value="{{ isset($disabled_time->id_location_time) ? $disabled_time->id_location_time : ''}}" >
    {!! $errors->first('id_location_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($disabled_time->date) ? $disabled_time->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
