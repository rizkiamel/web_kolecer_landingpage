<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal"> 
            {{ __('Create') }}
        </x-jet-button>
    </div>

    {{-- The data table --}}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Ulasan</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Via</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Situs</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if($data->count())
                            @foreach($data as $item)
                            <tr>
                                <td class="px-6 py-2">{{ $item->name }}</td>
                                <td class="px-6 py-2">{{ $item->review }}</td>
                                <td class="px-6 py-2">{{ $item->via }}</td>
                                <td class="px-6 py-2">{{ $item->website }}</td>
                                <td class="px-6 py-2 flex justify-end">
                                    <x-jet-button wire:click="updateShowModal({{ $item->id }})"> 
                                        {{ __('Update') }}
                                    </x-jet-button>
                                    <x-jet-danger-button class="ml-2" wire:click="deleteShowModal({{ $item->id }})"> 
                                        {{ __('Delete') }}
                                    </x-jet-button>
                                </td>
                            </tr>
                            
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="5">No Results Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        {{ $data->links() }}
    </div>

    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
            <x-slot name="title">
                {{ __('Create or Update Form') }}
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Nama') }}" />
                    <x-jet-input wire:model="name" class="block mt-1 w-full" type="text" />
                    @error('name') <span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="review" value="{{ __('Ulasan') }}" />
                    <x-jet-input wire:model="review" class="block mt-1 w-full" type="text" />
                    @error('review') <span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="via" value="{{ __('Via') }}" />
                    <x-jet-input wire:model="via" class="block mt-1 w-full" type="text" />
                    @error('via') <span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="website" value="{{ __('Situs') }}" />
                    <x-jet-input wire:model="website" class="block mt-1 w-full" type="text" />
                    @error('website') <span class="error">{{ $message }}</span>@enderror
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                @if($modelId)
                    <x-jet-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                        {{ __('Update') }}
                    </x-jet-danger-button>
                @else
                    <x-jet-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                        {{ __('Create') }}
                    </x-jet-danger-button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>

        {{-- The Delete Modal --}}
        <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
            <x-slot name="title">
                {{ __('Delete Navigation Item') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this navigation item?') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                    {{ __('Delete') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
</div>

