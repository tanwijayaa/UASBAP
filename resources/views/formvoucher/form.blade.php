<div class="form-group {{ $errors->has('Judul') ? 'has-error' : ''}}">
    <label for="Judul" class="control-label">{{ 'Judul' }}</label>
    <input class="form-control" name="Judul" type="text" id="Judul" value="{{ isset($formvoucher->Judul) ? $formvoucher->Judul : ''}}" >
    {!! $errors->first('Judul', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($formvoucher->Deskripsi) ? $formvoucher->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Diskon') ? 'has-error' : ''}}">
    <label for="Diskon" class="control-label">{{ 'Diskon' }}</label>
    <input class="form-control" name="Diskon" type="text" id="Diskon" value="{{ isset($formvoucher->Diskon) ? $formvoucher->Diskon : ''}}" >
    {!! $errors->first('Diskon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tombol') ? 'has-error' : ''}}">
    <label for="Tombol" class="control-label">{{ 'Tombol' }}</label>
    <input class="form-control" name="Tombol" type="text" id="Tombol" value="{{ isset($formvoucher->Tombol) ? $formvoucher->Tombol : ''}}" >
    {!! $errors->first('Tombol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Link_Tombol') ? 'has-error' : ''}}">
    <label for="Link_Tombol" class="control-label">{{ 'Link Tombol' }}</label>
    <input class="form-control" name="Link_Tombol" type="text" id="Link_Tombol" value="{{ isset($formvoucher->Link_Tombol) ? $formvoucher->Link_Tombol : ''}}" >
    {!! $errors->first('Link_Tombol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="text" id="Foto" value="{{ isset($formvoucher->Foto) ? $formvoucher->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Disable') ? 'has-error' : ''}}">
    <label for="Disable" class="control-label">{{ 'Disable' }}</label>
    <input class="form-control" name="Disable" type="text" id="Disable" value="{{ isset($formvoucher->Disable) ? $formvoucher->Disable : ''}}" >
    {!! $errors->first('Disable', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
