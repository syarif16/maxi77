<div class="form-group {{ $errors->has('supir') ? 'has-error' : ''}}">
    <label for="supir" class="col-md-4 control-label">{{ 'Supir' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="supir" type="text" id="supir" value="{{ $crew->supir or ''}}" >
        {!! $errors->first('supir', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telepon') ? 'has-error' : ''}}">
    <label for="telepon" class="col-md-4 control-label">{{ 'Telepon' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telepon" type="text" id="telepon" value="{{ $crew->telepon or ''}}" >
        {!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mulaiKerja') ? 'has-error' : ''}}">
    <label for="mulaiKerja" class="col-md-4 control-label">{{ 'Mulaikerja' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mulaiKerja" type="date" id="mulaiKerja" value="{{ $crew->mulaiKerja or ''}}" >
        {!! $errors->first('mulaiKerja', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
