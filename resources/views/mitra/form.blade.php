<div class="form-group {{ $errors->has('namaMitra') ? 'has-error' : ''}}">
    <label for="namaMitra" class="col-md-4 control-label">{{ 'Namamitra' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="namaMitra" type="text" id="namaMitra" value="{{ $mitra->namaMitra or ''}}" >
        {!! $errors->first('namaMitra', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamatMitra') ? 'has-error' : ''}}">
    <label for="alamatMitra" class="col-md-4 control-label">{{ 'Alamatmitra' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="alamatMitra" type="textarea" id="alamatMitra" >{{ $mitra->alamatMitra or ''}}</textarea>
        {!! $errors->first('alamatMitra', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telpMitra') ? 'has-error' : ''}}">
    <label for="telpMitra" class="col-md-4 control-label">{{ 'Telpmitra' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telpMitra" type="text" id="telpMitra" value="{{ $mitra->telpMitra or ''}}" >
        {!! $errors->first('telpMitra', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idUser') ? 'has-error' : ''}}">
    <label for="idUser" class="col-md-4 control-label">{{ 'Iduser' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idUser" type="number" id="idUser" value="{{ $mitra->idUser or ''}}" >
        {!! $errors->first('idUser', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
