
<input 
type="{{ $type ?? 'text'}}" 
class="{{ $inputClass ?? 'form-control'}}" 
id="{{ $fieldname ?? 'FN-ND'}}" 
name="{{ $fieldname ?? 'FN-ND'}}" 
value="{{ old( $fieldname ?? 'FN-ND' ) }}" 
placeholder="{{ $showname ?? ''}}" 
{{ isset($enable) ?? 'readonly' }}
>

{{-- Error por validación  --}}
@error( $fieldname ?? 'FN-ND')
    <small class="text-danger"><strong>*{{ $message }}</strong></small>
@enderror 