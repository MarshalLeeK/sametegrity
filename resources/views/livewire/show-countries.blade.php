<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1>Probando comportamiento</h1>
    <div class="col-sm-3">
        <label for="documentplace-state" class="form-label">Departamento / Estado
            Origen</label>
        <select class="form-select geo" name="documentplace-state" id="documentplace-state"
            aria-label="">
            <optgroup label="Seleccione Departamento/Estado">
                <option
                    value="{{ !old('documentplace-state') ? 'Antioquia' : old('documentplace-state') }}">
                    {{ !old('documentplace-state') ? 'Antioquia' : old('documentplace-state') }}
                </option>
                @foreach ($statesResponse as $state)
                  <option value="{{ $state['state_name'] }}">{{ $state['state_name'] }}</option>
                @endforeach  
        </Select>
    </div>
    <h2> salida de livewire</h2>
</div>
