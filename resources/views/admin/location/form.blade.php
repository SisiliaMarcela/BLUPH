<div class="form-group {{ $errors->has('id_location') ? 'has-error' : ''}}">
    <label for="id_location" class="control-label">{{ 'Id Location' }}</label>
    <input class="form-control" name="id_location" type="number" id="id_location" value="{{ isset($location->id_location) ? $location->id_location : ''}}" >
    {!! $errors->first('id_location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_location') ? 'has-error' : ''}}">
    <label for="name_location" class="control-label">{{ 'Name Location' }}</label>
    <input class="form-control" name="name_location" type="text" id="name_location" value="{{ isset($location->name_location) ? $location->name_location : ''}}" >
    {!! $errors->first('name_location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('spot_name') ? 'has-error' : ''}}">
    <label for="spot_name" class="control-label">{{ 'Spot Name' }}</label>
    <input class="form-control" name="spot_name" type="text" id="spot_name" value="{{ isset($location->spot_name) ? $location->spot_name : ''}}" >
    {!! $errors->first('spot_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('max_capacity') ? 'has-error' : ''}}">
    <label for="max_capacity" class="control-label">{{ 'Max Capacity' }}</label>
    <input class="form-control" name="max_capacity" type="text" id="max_capacity" value="{{ isset($location->max_capacity) ? $location->max_capacity : ''}}" >
    {!! $errors->first('max_capacity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="control-label">{{ 'Active' }}</label>
    <input class="form-control" name="active" type="number" id="active" value="{{ isset($location->active) ? $location->active : ''}}" >
    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="text" id="image" value="{{ isset($location->image) ? $location->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
