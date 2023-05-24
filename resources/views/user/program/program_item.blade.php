<a href="/detail/{{ $program->id }}" class="inline-block my-4 program-item">
    <div class="flex w-full">
        <div class="flex-1 mr-4 h-full">
            <img src="{{ asset($program->banner_img) }}" alt="" class="rounded-lg">
        </div>
        <div class="flex-1 max-w-[45%]">
            <div class="flex flex-col h-full justify-between">
                <p class="text-xs font-semibold">{{ substr($program->nama, 0, 50) }}</p>
                <div class="flex">
                    <span
                        class="font-normal text-[10px] mr-2">{{ substr($program->user_name, 0, 25) }}</span>
                    <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                        class="w-[31px] h-3">
                </div>
                <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                    <div class="w-4/5 h-full bg-primer"></div>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-normal text-[10px]">Terkumpul</p>
                        <p class="font-bold text-xs">@convert($program->total_dana)</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <p class="font-normal text-[10px]">Sisa hari</p>
                        <p class="font-bold text-xs">
                            {{ \Carbon\Carbon::parse($program->tanggal_mulai)->diffInDays(\Carbon\Carbon::parse($program->tanggal_berakhir)) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>