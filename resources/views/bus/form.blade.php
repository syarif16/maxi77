<div class="form-group {{ $errors->has('tipeBus') ? 'has-error' : ''}}">
    <label for="tipeBus" class="col-md-4 control-label">{{ 'Tipebus' }}</label>
    <div class="col-md-6">
        <select name="tipeBus" class="form-control" id="tipeBus">
            <option value="">-Pilih-</option>
            <option value="Standar">Standar</option>
            <option value="Eksekutif">Eksekutif</option>
        </select>
        <!-- <input class="form-control" name="tipeBus" type="text" id="tipeBus" value="{{ $bus->tipeBus or ''}}" > -->
        {!! $errors->first('tipeBus', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tipeBus') ? 'has-error' : ''}}">
    <label for="seat" class="col-md-4 control-label">{{ 'seat' }}</label>
    <div class="col-md-6">
        <select name="seat" class="form-control" id="seat">
            <option value="">-Pilih-</option>
            <option value="2-3">2-3</option>
            <option value="2-2">2-2</option>
        </select>
        <!-- <input class="form-control" name="seat" type="" id="seat" value="{{ $bus->seat or ''}}" > -->
        {!! $errors->first('seat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jumlahKursi') ? 'has-error' : ''}}">
    <label for="jumlahKursi" class="col-md-4 control-label">{{ 'Jumlahkursi' }}</label>
    <div class="col-md-6">
        <select name="jumlahKursi" class="form-control" id="jumlahKursi">
            <option value="{{ $bus->jumlahKursi or ''}}">-Pilih-</option>
            <option value="{{ $bus->jumlahKursi or ''}}">42</option>
            <option value="{{ $bus->jumlahKursi or ''}}">49</option>
            <option value="{{ $bus->jumlahKursi or ''}}">52</option>
            <option value="{{ $bus->jumlahKursi or ''}}">59</option>
        </select>
    <!-- <input class="form-control" name="jumlahKursi" type="number" id="jumlahKursi" value="{{ $bus->jumlahKursi or ''}}" > -->
        {!! $errors->first('jumlahKursi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hargaSewa') ? 'has-error' : ''}}">
    <label for="hargaSewa" class="col-md-4 control-label">{{ 'Hargasewa' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="hargaSewa" type="number" id="hargaSewa" value="{{ $bus->hargaSewa or ''}}" >
        {!! $errors->first('hargaSewa', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fasilitas') ? 'has-error' : ''}}">
    <label for="fasilitas" class="col-md-4 control-label">{{ 'fasilitas' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="fasilitas" type="textarea" id="fasilitas" >{{ $bus->fasilitas or ''}}</textarea>
        {!! $errors->first('fasilitas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kuantitas') ? 'has-error' : ''}}">
    <label for="kualitas" class="col-md-4 control-label">{{ 'kuantitas' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="kuantitas" type="number" id="kuantitas" value="{{ $bus->kuantitas or ''}}" >
        {!! $errors->first('kuantitas', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
