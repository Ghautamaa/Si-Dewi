@php
   use Carbon\Carbon;
@endphp
<div class="bg-white rounded-2xl">
    <div class="p-10">
        <h1 class="text-3xl font-bold">Review</h1>
        <ul class="max-w-md mt-5 divide-y divide-gray-200 dark:divide-gray-700">
            {{-- @dd($review) --}}
            @foreach ($review as $row)
                <li class="py-3 sm:pb-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-shrink-0">

                            @if (!empty($row['foto']))
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ env('APP_API_URL') }}/resource/akun/{{ $row['foto'] }}" alt="User image">
                            @else
                                <img class="w-8 h-8 rounded-full" src="default-image-path" alt="Default image">
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{ $row['akun']['nama'] }}
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                @php
                                    $created = Carbon::parse($row['akun']['createdAt']);
                                    $formattedCreatedAt = $created->format('d F Y, H:i');
                                @endphp

                                {{ $formattedCreatedAt }}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            @php
                                $rating = $row['rating'];
                                $fullStars = $rating;

                                $emptyStars = 5 - $fullStars;
                            @endphp
                            {{-- Bintang Penuh --}}
                            @for ($i = 0; $i < $fullStars; $i++)
                                <svg class="w-5 h-5 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            @endfor
                            {{-- Bintang Kosong --}}
                            @for ($i = 0; $i < $emptyStars; $i++)
                                <svg class="w-5 h-5 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="mt-3 komentar">
                        <p>{{ $row['review'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $review->links() }}
    </div>
</div>
