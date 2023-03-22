<section
    class="bg-[url('../../public/img/comingsoon.png')] bg-cover  bg-no-repeat  bg-top flex items-center space-between">
    <div class="bg-[#0F7874] bg-opacity-94 w-full h-full">
        <x-section-container>
            <div class="flex-col w-1/2 gap-5">
                <div class="mb-5">
                    <p class="font-extrabold text-xl text-white text-center">NAIROBI COOPERATIVE INSURANCE</p>
                </div>
                <div class="mb-5">
                    <p class="text-[#EAB913] text-[32px] font-extrabold text-center italic">
                        NAIROBI COOPERATIVE INSURANCE
                    </p>
                </div>
                <div class="mb-5">
                    <p class="font-extrabold text-xl text-white text-center"><i
                            class="fa-sharp fa-solid fa-location-dot mr-4"></i>NAIROBI COOPERATIVE INSURANCE</p>
                </div>
            </div>
            <div class="w-full lg:w-1/3" id="clockdiv">
                <div class="flex lg:flex-row justify-between items-center">
                    <div class="bg-[#EAB913] w-1/2 h-32 flex flex-col justify-center items-center">
                        <span class="days text-white font-extrabold text-[4rem] text-center" id="day"></span>
                        <div class="smalltext text-white">Days</div>
                    </div>
                    <div class="bg-[#00201FE3] w-1/2 h-32 flex flex-col justify-center items-center">
                        <span class="hours text-white font-extrabold text-[4rem] text-center" id="hour"></span>
                        <div class="smalltext text-white">Hours</div>
                    </div>
                </div>
                <div class="flex lg:flex-row justify-between items-center">
                    <div class="bg-[#00201FE3] w-1/2 h-32 flex flex-col justify-center items-center">
                        <span class="minutes text-white font-extrabold text-[4rem] text-center" id="minute"></span>
                        <div class="smalltext text-white">Minutes</div>
                    </div>
                    <div class="bg-[#EAB913] w-1/2 h-32 flex flex-col justify-center items-center">
                        <span class="seconds text-white font-extrabold text-[4rem] text-center" id="second"></span>
                        <div class="smalltext text-white">Seconds</div>
                    </div>
                </div>
            </div>
        </x-section-container>
    </div>
</section>
