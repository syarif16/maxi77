<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="col-md-4 control-label">{{ 'Nama' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nama" type="text" id="nama" value="{{ $crew->nama or ''}}" >
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : ''}}">
    <label for="pekerjaan" class="col-md-4 control-label">{{ 'Pekerjaan' }}</label>
    <div class="col-md-6">
        <select name="pekerjaan" class="form-control" id="pekerjaan">
            <option value="{{ $crew->pekerjaan or ''}}">Driver</option>
            <option vvalue="{{ $crew->pekerjaan or ''}}">Kernet</option>
        </select>
        <!-- <input class="form-control" name="pekerjaan" type="text" id="pekerjaan" value="{{ $crew->pekerjaan or ''}}" > -->
        {!! $errors->first('pekerjaan', '<p class="help-block">:message</p>') !!}
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
