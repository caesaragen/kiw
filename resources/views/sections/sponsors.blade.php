<section
    class="bg-white flex items-center space-between">
    <div class="mx-auto  flex flex-col items-center px-10 lg:px-64 gap-10 py-10">
        <div class="flex-col w-full gap-5">
            <div class="mb-5 flex flex-col justify-center items-center">
                <h2 class="font-extrabold text-[#000000] text-[38px] text-center">
                    Champions of Our Cause.
                </h2>
                <p class="font-light text-xl text-[#000000] text-[22px] text-center">Our Valued Partners and Supporters.</p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row  lg:gap-36">
            @foreach ($sponsors as $sponsor)
            <div class="mb-5 flex flex-col justify-center items-center ">
                <img src= "{{ asset('storage/files/uploads/'.$sponsor->image) }}" alt="about" class="max-w-none  object-contain">
                <p class="text-center text-black text-[18px] text-bold">
                    {{ $sponsor->name }}
                </p>
            </div>
            @endforeach
            {{-- <div class="mb-5 flex flex-col justify-center items-center ">
                <img src="{{ asset('img/gok.png') }}" alt="about" class="max-w-none  object-contain">
                <p class="text-center text-black text-[18px] text-bold">
                    GoK (Ministry of <br> Foreign Affairs}
                </p>
            </div>
            <div class="mb-5 flex flex-col justify-center items-center ">
                <img src="{{ asset('img/sponsor_1.png') }}" alt="about" class="max-w-none  object-contain">
                <p class="text-center text-black text-[18px] text-bold">
                    KeNia
                </p>
            </div>
            <div class="mb-5 flex flex-col justify-center items-center ">
                <img src="{{ asset('img/gok.png') }}" alt="about"  class="max-w-none  object-contain">
                <p class="text-center text-black text-[18px] text-bold">
                    GoK (Ministry of <br> of Youth)
                </p>
            </div>
            <div class="mb-5 flex flex-col justify-center items-center ">
                <img src="{{ asset('img/commonwealth.png') }}" alt="about" class="max-w-none  object-contain">
                      <p class="text-center text-black text-[18px] text-bold">
                        Commonwealth
                </p>
            </div> --}}
        </div>
    </div>
</section>