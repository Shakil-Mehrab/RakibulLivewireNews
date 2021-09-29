@props([
    'multiple' => false,
])

{{-- <div>
    {{ $newOption = '' }}
    <div id="createNewBox" class="flex justify-between w-full">
        <button class="flex" wire:click.prevent="createNewOne">Create</button>
    </div> --}}

<div class="flex w-full" wire:ignore id="select2SearchTag">
    <select {{ $multiple ? 'multiple' : '' }}
        {{ $attributes->merge(['class' => 'select2 form-select block w-full text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5']) }}>
        {{ $slot }}

    </select>
</div>
{{-- </div> --}}


@push('scripts')
    <script>
        var newOne = "No Result Found"
        $(document).ready(function() {
            // $('#select2Search').on('keyup', 'textarea', function(e) {
            //     if (e.keyCode === 13) {
            //         newOne = $(this).val();
            //         document.getElementById('createNewBox').innerHTML =
            //             '<div><input type="text" wire:model="new" value="' + newOne +
            //             '"/><button wire:click="hihi">Create</button></div>';
            //         console.log(newOne)
            //     }
            // })
            $('#select2SearchTag .select2').select2({
                // placeholder: 'Select an option',
                width: '100%'

            }).on('change', function() {
                @this.set('state.tags', $(this).val());
            });
            //             $('.select2').select2({}).on('keyup', function(e) {
            //                 if (e.keyCode === 13) {
            //                     var element = $(this);
            //                     $('#select2Search').on('keyup', 'textarea', function() {
            //                         newOne = $(this).val();
            //                     })
            //                     element.append('<option value="' + newOne + '" selected>' + newOne + '</option>');
            //                     console.log(newOne)
            //                 }
            //
            //             });
            //             $('.select2').select2({
            //
            //                 "language": {
            //                     "noResults": function() {
            //                         return;
            //                     }
            //                 }
            //
            //             });


        });
    </script>
@endpush
