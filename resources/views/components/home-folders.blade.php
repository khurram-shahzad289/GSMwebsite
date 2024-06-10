@php
    $currentDate = \Carbon\Carbon::now();
    $threeMonthsAgo = $currentDate->subMonths(3);
@endphp

<div class="flex gap-6 justify-center items-center py-10">
    @foreach($folders as $folder)
            <a href="{{ route( $route , ['folder' => $folder->getFolderId()]) }}" class="relative flex justify-center items-center gap-2">
                @if(\Carbon\Carbon::parse($folder->getFolderCreatedAt())->greaterThan($threeMonthsAgo))
                    <div class="absolute top-0 left-0 -mt-4 bg-red-500 text-white px-2 py rounded">
                        {{ __('New') }}
                    </div>
                @endif

                <img class="w-[100px]" src="/images/icons/folder.svg">
                <div class="flex flex-col gap-2">
                    <div class="font-bold">
                        {{ $folder->getFolderName() }}
                    </div>
                    <div class="text-gray-500">
                        {{ $folder->getFolderDescription() }}
                    </div>
                </div>
            </a>
    @endforeach
</div>
