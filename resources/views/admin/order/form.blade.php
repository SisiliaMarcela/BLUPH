<div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
    <input class="form-control" name="order_id" type="number" id="order_id" value="{{ isset($order->order_id) ? $order->order_id : ''}}" >
    {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_location') ? 'has-error' : ''}}">
    <label for="id_location" class="control-label">{{ 'Id Location' }}</label>
    <input class="form-control" name="id_location" type="number" id="id_location" value="{{ isset($order->id_location) ? $order->id_location : ''}}" >
    {!! $errors->first('id_location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($order->date) ? $order->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    <label for="nim" class="control-label">{{ 'Nim' }}</label>
    <input class="form-control" name="nim" type="text" id="nim" value="{{ isset($order->nim) ? $order->nim : ''}}" >
    {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_time') ? 'has-error' : ''}}">
    <label for="id_time" class="control-label">{{ 'Id Time' }}</label>
    <input class="form-control" name="id_time" type="number" id="id_time" value="{{ isset($order->id_time) ? $order->id_time : ''}}" >
    {!! $errors->first('id_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('order_status') ? 'has-error' : ''}}">
    <label for="order_status" class="control-label">{{ 'Order Status' }}</label>
    <input class="form-control" name="order_status" type="text" id="order_status" value="{{ isset($order->order_status) ? $order->order_status : ''}}" >
    {!! $errors->first('order_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="control-label">{{ 'Note' }}</label>
    <input class="form-control" name="note" type="text" id="note" value="{{ isset($order->note) ? $order->note : ''}}" >
    {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('present') ? 'has-error' : ''}}">
    <label for="present" class="control-label">{{ 'Present' }}</label>
    <input class="form-control" name="present" type="number" id="present" value="{{ isset($order->present) ? $order->present : ''}}" >
    {!! $errors->first('present', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_admin') ? 'has-error' : ''}}">
    <label for="id_admin" class="control-label">{{ 'Id Admin' }}</label>
    <input class="form-control" name="id_admin" type="number" id="id_admin" value="{{ isset($order->id_admin) ? $order->id_admin : ''}}" >
    {!! $errors->first('id_admin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('handle_by') ? 'has-error' : ''}}">
    <label for="handle_by" class="control-label">{{ 'Handle By' }}</label>
    <input class="form-control" name="handle_by" type="text" id="handle_by" value="{{ isset($order->handle_by) ? $order->handle_by : ''}}" >
    {!! $errors->first('handle_by', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
