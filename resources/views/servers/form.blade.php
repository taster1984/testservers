<div class="form-group {{ $errors->has('provider') ? 'has-error' : ''}}">
    <label for="provider" class="control-label">{{ 'Provider' }}</label>
    <input class="form-control" name="provider" type="text" id="provider" value="{{ isset($server->provider) ? $server->provider : ''}}" >
    {!! $errors->first('provider', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('brand') ? 'has-error' : ''}}">
    <label for="brand" class="control-label">{{ 'Brand' }}</label>
    <input class="form-control" name="brand" type="text" id="brand" value="{{ isset($server->brand) ? $server->brand : ''}}" >
    {!! $errors->first('brand', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <input class="form-control" name="location" type="text" id="location" value="{{ isset($server->location) ? $server->location : ''}}" >
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cpu') ? 'has-error' : ''}}">
    <label for="cpu" class="control-label">{{ 'Cpu' }}</label>
    <input class="form-control" name="cpu" type="text" id="cpu" value="{{ isset($server->cpu) ? $server->cpu : ''}}" >
    {!! $errors->first('cpu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drive') ? 'has-error' : ''}}">
    <label for="drive" class="control-label">{{ 'Drive' }}</label>
    <input class="form-control" name="drive" type="text" id="drive" value="{{ isset($server->drive) ? $server->drive : ''}}" >
    {!! $errors->first('drive', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($server->price) ? $server->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
