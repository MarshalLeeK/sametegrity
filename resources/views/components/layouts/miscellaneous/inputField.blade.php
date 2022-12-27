<input type="{{ $type ?? 'text' }}" class="{{ $inputClass ?? 'form-control' }}" id="{{ $fieldname ?? 'FN-ND' }}"
    name="{{ $fieldname ?? 'FN-ND' }}" value="{{ old($fieldname) ?? ($value ?? '') }}"
    placeholder="{{ $placeholder ?? $fieldname }}" {{ $enable == 1 ? 'readonly' : '' }}
    data-browse-on-zone-click={{ $dataBrowseOnZoneClick ?? 'false' }}>

{{-- Error por validación  --}}
@error($fieldname ?? 'FN-ND')
    <small class="text-danger"><strong>*{{ $message }}</strong></small>
@enderror
