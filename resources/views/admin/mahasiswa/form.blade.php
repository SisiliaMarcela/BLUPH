<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    <label for="nim" class="control-label">{{ 'Nim' }}</label>
    <input class="form-control" name="nim" type="text" id="nim" value="{{ isset($mahasiswa->nim) ? $mahasiswa->nim : ''}}" >
    {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($mahasiswa->nama) ? $mahasiswa->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($mahasiswa->kelas) ? $mahasiswa->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($mahasiswa->email) ? $mahasiswa->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_proram') ? 'has-error' : ''}}">
    <label for="id_proram" class="control-label">{{ 'Id Proram' }}</label>
    <input class="form-control" name="id_proram" type="number" id="id_proram" value="{{ isset($mahasiswa->id_proram) ? $mahasiswa->id_proram : ''}}" >
    {!! $errors->first('id_proram', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
