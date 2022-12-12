<div class="form-group {{ $errors->has('nama_student') ? 'has-error' : ''}}">
    <label for="nama_student" class="control-label">{{ 'Nama Student' }}</label>
    <input class="form-control" name="nama_student" type="text" id="nama_student" value="{{ isset($replacementlounge->nama_student) ? $replacementlounge->nama_student : ''}}" >
    {!! $errors->first('nama_student', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('studentID') ? 'has-error' : ''}}">
    <label for="studentID" class="control-label">{{ 'Studentid' }}</label>
    <input class="form-control" name="studentID" type="text" id="studentID" value="{{ isset($replacementlounge->studentID) ? $replacementlounge->studentID : ''}}" >
    {!! $errors->first('studentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('intake') ? 'has-error' : ''}}">
    <label for="intake" class="control-label">{{ 'Intake' }}</label>
    <input class="form-control" name="intake" type="text" id="intake" value="{{ isset($replacementlounge->intake) ? $replacementlounge->intake : ''}}" >
    {!! $errors->first('intake', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_jam_kuliah') ? 'has-error' : ''}}">
    <label for="jadwal_jam_kuliah" class="control-label">{{ 'Jadwal Jam Kuliah' }}</label>
    <input class="form-control" name="jadwal_jam_kuliah" type="datetime-local" id="jadwal_jam_kuliah" value="{{ isset($replacementlounge->jadwal_jam_kuliah) ? $replacementlounge->jadwal_jam_kuliah : ''}}" >
    {!! $errors->first('jadwal_jam_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan_melakukan_replacement_class') ? 'has-error' : ''}}">
    <label for="alasan_melakukan_replacement_class" class="control-label">{{ 'Alasan Melakukan Replacement Class' }}</label>
    <input class="form-control" name="alasan_melakukan_replacement_class" type="text" id="alasan_melakukan_replacement_class" value="{{ isset($replacementlounge->alasan_melakukan_replacement_class) ? $replacementlounge->alasan_melakukan_replacement_class : ''}}" >
    {!! $errors->first('alasan_melakukan_replacement_class', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
