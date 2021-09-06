{{ csrf_field() }}
<div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Number</label>
    <div class="col-md-12">
        <input id="number" type="number" min="0" class="form-control" name="number"
               value="">
        @if ($errors->has('number'))
            <span class="help-block">
                <strong>{{ $errors->first('number') }}</strong>
            </span>
        @endif
    </div>
</div>