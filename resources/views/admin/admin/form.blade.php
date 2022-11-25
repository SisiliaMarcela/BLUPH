<div class="form-group {{ $errors->has('id_admin') ? 'has-error' : ''}}">
    <label for="id_admin" class="control-label">{{ 'Id Admin' }}</label>
    <input class="form-control" name="id_admin" type="number" id="id_admin" value="{{ isset($admin->id_admin) ? $admin->id_admin : ''}}" >
    {!! $errors->first('id_admin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($admin->username) ? $admin->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="text" id="password" value="{{ isset($admin->password) ? $admin->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('permission') ? 'has-error' : ''}}">
    <label for="permission" class="control-label">{{ 'Permission' }}</label>
    <input class="form-control" name="permission" type="text" id="permission" value="{{ isset($admin->permission) ? $admin->permission : ''}}" >
    {!! $errors->first('permission', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('access_date') ? 'has-error' : ''}}">
    <label for="access_date" class="control-label">{{ 'Access Date' }}</label>
    <input class="form-control" name="access_date" type="date" id="access_date" value="{{ isset($admin->access_date) ? $admin->access_date : ''}}" >
    {!! $errors->first('access_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('access_time') ? 'has-error' : ''}}">
    <label for="access_time" class="control-label">{{ 'Access Time' }}</label>
    <input class="form-control" name="access_time" type="time" id="access_time" value="{{ isset($admin->access_time) ? $admin->access_time : ''}}" >
    {!! $errors->first('access_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="control-label">{{ 'Active' }}</label>
    <input class="form-control" name="active" type="number" id="active" value="{{ isset($admin->active) ? $admin->active : ''}}" >
    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
