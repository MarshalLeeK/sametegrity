<div class="{{ $divClass ?? 'form-group col-6' }}">

    {{-- Label --}}
    <x-layouts.miscellaneous.inputLabel :fieldname="$fieldname" :showname="$showname" />

    {{-- field --}}
    <x-layouts.miscellaneous.inputField :fieldname="$fieldname" :showname="$showname" :type="$type ?? null" :class="$class ?? null"
        :enable="$enable ?? null" :placeholder="$placeholder ?? null" :input-class="$inputclass ?? null" :value="$value ?? old($showname)" />

</div>
