<div class="mb-2 bg-white sm:w-4/6  rounded-2xl p-8 h-fit ">
    <div class="flex justify-between items-center">
        <div class="">
            <h1 class="text-5xl font-bold max-w-2xl">{{ $produk['nama'] }} </h1>
            <p class="font-semibold mt-1 ">{{ $desa['nama'] }} / {{ $desa['kabupaten'] }}
            </p>
        </div>
        <div class="star flex flex-col items-center">
            {{-- <div class=" flex gap-1">
                <h2 class="text-center text-l mt-1 font-bold">Best Seller</h2>
            </div> --}}
        </div>
    </div>
    <div class="deskripsi">
        <div class="mt-5 max-w-full">
            <p class="break-words">  {!! nl2br(e($produk['deskripsi'])) !!}</p>
        </div>
    </div>
</div>
