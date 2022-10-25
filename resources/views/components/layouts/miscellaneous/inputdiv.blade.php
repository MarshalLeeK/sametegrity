<div class="{{ $divClass ?? "form-group col-6"}}">
    
    {{-- Label --}}
    <x-layouts.miscellaneous.inputLabel
    :fieldname="$fieldname"
    :showname="$showname"
    />
    
    {{-- field --}}
    <x-layouts.miscellaneous.inputField
        :fieldname="$fieldname"
        :showname="$showname"
        :type="$type ?? NULL"
        :class="$class ?? NULL"
        :enable="$enable ?? NULL"
        :input-class="$inputclass ?? NULL"
    />

</div>