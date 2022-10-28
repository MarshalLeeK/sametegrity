
<input 
type="{{ $type ?? 'text'}}" 
class="{{ $inputClass ?? 'form-control'}}" 
id="{{ $fieldName ?? 'FN-ND'}}" 
name="{{ $fieldName ?? 'FN-ND'}}" 
value="{{ old( $fieldName ?? 'FN-ND' ) }}" 
{{-- placeholder="{{ $showname ?? ''}}"  --}}
{{ isset($enable) ?? 'readonly' }}
data-browse-on-zone-click={{ $dataBrowseOnZoneClick ?? "false" }}
>

{{-- Error por validación  --}}
@error( $fieldName ?? 'FN-ND')
    <small class="text-danger"><strong>*{{ $message }}</strong></small>
@enderror 