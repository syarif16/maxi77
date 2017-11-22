<div class="form-group {{ $errors->has('tanggalTransaksi') ? 'has-error' : ''}}">
    <label for="tanggalTransaksi" class="col-md-4 control-label">{{ 'tanggalTransaksi' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tanggalTransaksi" type="date" id="tanggalTransaksi" value="{{ $transaksi->tanggalTransaksi or ''}}" >
        {!! $errors->first('tanggalTransaksi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('totalPembayaran') ? 'has-error' : ''}}">
    <label for="totalPembayaran" class="col-md-4 control-label">{{ 'Totalpembayaran' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="totalPembayaran" type="number" id="totalPembayaran" value="{{ $transaksi->totalPembayaran or ''}}" >
        {!! $errors->first('totalPembayaran', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idPemesanan') ? 'has-error' : ''}}">
    <label for="idPemesanan" class="col-md-4 control-label">{{ 'Idpemesanan' }}</label>
    <div class="col-md-6">
        <div class="input-field">
            <select id="idPemesanan" name="idPemesanan" class="form-control" required="" style="width: 200px">
                <option>Pilih</option>
                @foreach($pemesanan as $pemesanan)
                <option value="{{$pemesanan->id}}" >{{$pemesanan->namaPemesan}}</option>
                @endforeach
            </select>
        </div>
        </div>
        {!! $errors->first('idPemesanan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
<br>
<br>