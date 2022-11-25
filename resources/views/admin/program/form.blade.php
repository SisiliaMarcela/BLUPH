<div class="form-group {{ $errors->has('id_program') ? 'has-error' : ''}}">
    <label for="id_program" class="control-label">{{ 'Id Program' }}</label>
    <input class="form-control" name="id_program" type="number" id="id_program" value="{{ isset($program->id_program) ? $program->id_program : ''}}" >
    {!! $errors->first('id_program', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('program_namee') ? 'has-error' : ''}}">
    <label for="program_namee" class="control-label">{{ 'Program Namee' }}</label>
    <input class="form-control" name="program_namee" type="text" id="program_namee" value="{{ isset($program->program_namee) ? $program->program_namee : ''}}" >
    {!! $errors->first('program_namee', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
