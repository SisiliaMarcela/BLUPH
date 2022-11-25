<div class="form-group {{ $errors->has('id_time') ? 'has-error' : ''}}">
    <label for="id_time" class="control-label">{{ 'Id Time' }}</label>
    <input class="form-control" name="id_time" type="number" id="id_time" value="{{ isset($time->id_time) ? $time->id_time : ''}}" >
    {!! $errors->first('id_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Time' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ isset($time->time) ? $time->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
