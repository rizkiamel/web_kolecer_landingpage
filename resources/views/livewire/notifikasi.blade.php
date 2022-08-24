<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="isReadAll({{auth()->user()->id}})"> 
                {{ __('Mark All as Read') }}
        </x-jet-button>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                {{ $userId }}
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Date Time</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider">Activity</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-fray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @if(auth()->user()->unreadNotifications->count())
                        @foreach(auth()->user()->unreadNotifications as $notification)
                        <tr>
                            <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                {{ $notification->data['repliedTime'] }}
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                User {{ $notification->data['user'] }} sudah {{ $notification->data['pesan'] }}
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                <x-jet-button wire:click="isRead({{ $notification->id }})"> 
                                    {{ __('Mark as Read') }}
                                </x-jet-button>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                        </tr>
                    @endif    
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

</div>
