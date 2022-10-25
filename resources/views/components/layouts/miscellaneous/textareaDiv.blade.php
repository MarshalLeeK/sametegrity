<div class="{{ $divClass ?? "form-group col-6"}}">
    {{-- Label --}}
    <x-layouts.miscellaneous.inputLabel
        :class="$labelClass ?? NULL"
        :fieldname="$fieldname"
        :showname="$showname"
    />
    
    {{-- field --}}
    <x-layouts.miscellaneous.inputTextarea
        :class="$textareaClass ?? NULL"
        :name="$fieldname ?? NULL"
        :cols="$cols ?? NULL"
        :rows="$rows ?? NULL"
        :enable="$enable ?? NULL"
    />

</div>