<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <title>Kaiso | کایسو</title>
</head>
<body class="bg-[#f1d7c8]">
    <header class="fixed w-full top-0 right-0 flex justify-center items-center z-30" style="background: #000F24;
        background: linear-gradient(180deg, rgba(0, 15, 36, 1) 10%, rgba(255, 255, 255, 0) 100%);">
        <div class="2xl:container w-11/12 flex justify-between items-center py-4">
            <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-white lg:hidden" onclick="openMenu()" id="hamMenuBtn" viewBox="0 0 448 512">
                    <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/>
                </svg>
                <a href="{{ url('/') }}" class="flex items-center gap-2.5 relative">
                    <img src="{{ asset('img/logo.png') }}" class="max-w-7 lg:max-w-10" alt="">
                    <span class="text-white text-2xl hidden lg:inline-block">کایسو</span>
                    <span class="text-white absolute right-1/2 hidden lg:inline-block translate-x-1/2 -bottom-8 text-sm w-40 text-center lg:pr-0 pr-5">راهکاری که اهمیت دارد</span>
                </a>
            </div>
            <ul class="hidden lg:flex flex-row items-center gap-8 pr-40">
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">خانه</a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">خدمات</a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">پروژه ها</a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">وبلاگ</a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">درباره ما</a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="py-3 text-white">تماس با ما</a>
                </li>
            </ul>
            <div>
                <a href="#" class="px-5 text-white text-sm lg:text-base py-2 rounded-md lg:rounded-xl" style='background: #d15913;
                    background: linear-gradient(0deg, rgba(209, 89, 19, 1) 0%, rgba(255, 137, 59, 1) 100%);'>تماس با ما</a>
            </div>
        </div>
        <div class="fixed w-full h-dvh top-0 right-0 bg-black/50 backdrop-blur invisible opacity-0 transition-all duration-300" id="hamburgerMenu">
            <div class="w-2/3 bg-white h-full transition-all duration-300 delay-100 translate-x-full">
                <div>
                    <a href="{{ url('/') }}" class="flex items-center justify-center gap-2.5 relative p-5 border-b border-[#000F24]">
                        <img src="{{ asset('img/logo.png') }}" class="max-w-7" alt="">
                        <span class="text-[#000F24] text-2xl font-bold">کایسو</span>
                    </a>
                </div>
                <ul class="w-full flex flex-col mt-5 px-3">
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">خانه</a>
                    </li>
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">خدمات</a>
                    </li>
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">پروژه ها</a>
                    </li>
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">وبلاگ</a>
                    </li>
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">درباره ما</a>
                    </li>
                    <li>
                        <a href="#" class="block text-[#000F24] py-3 text-sm border-b border-[#000F24]/20 px-5">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="2xl:container mx-auto w-full bg-[#000f24] rounded-b-[10%] flex flex-col-reverse lg:flex-row items-center lg:max-h-[520px] pt-20 lg:pt-0 relative">
        <div class="w-full lg:w-7/12 rounded-br-[10%] relative pt-5 lg:pt-0">
            <div class="absolute w-full h-full top-0 right-0 lg:hidden" style="background: #000F24;
                background: linear-gradient(180deg, rgba(0, 15, 36, 1) 0%, rgba(89, 207, 203, 0) 40%);"></div>
            <img src="{{ asset('img/teamm.png') }}" class="w-full max-h-[520px] rounded-bl-[10%] lg:rounded-bl-none rounded-br-[10%]" alt="" style="box-shadow: inset 0 0 20px #000F24;">
        </div>
        <div class="w-11/12 mx-auto lg:w-5/12 lg:h-[510px] relative lg:-right-20 flex flex-col lg:flex-row items-center" style="background: #000F24;
                background: linear-gradient(90deg, rgba(0, 15, 36, 1) 90%, rgba(0, 15, 36, 0) 100%);">
            <div class="lg:mr-20 flex flex-col items-center lg:items-start">
                <span class="text-[#ff7611] text-sm lg:text-xl">ما کایسو هستیم</span>
                <h1 class="text-xl lg:text-5xl text-white leading-[1.5] text-center font-bold lg:font-normal">
                    ما یک تیم هستیم
                    <br>
                    ما
                    <span class="text-[#ff7611]"> راهکار </span>
                    خلق میکنیم
                </h1>
                <p class="text-white mt-4 leading-[1.8] text-center lg:text-start">
                    ما در کایسو،  خلق راهکار های هوشمندانه برای رشد و موفقیت کسب و کار ها، فناوری و راهکاری مناسب با نیاز های کسب و کار های رشدی رشد واقعی را شتاب میدهیم.
                </p>
                <div class="flex flex-row items-center gap-8 mt-5">
                    <a href="#" class="flex flex-row items-center gap-2.5 px-5 py-2.5 cursor-pointer rounded-md lg:rounded-xl" style='background: #d15913;
                        background: linear-gradient(0deg, rgba(209, 89, 19, 1) 0%, rgba(255, 137, 59, 1) 100%);'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 lg:w-5 fill-white" viewBox="0 0 448 512">
                            <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                        </svg>
                        <span class="text-white text-sm lg:text-base">خدمات ما</span>
                    </a>
                    <a href="#" class="flex flex-row items-center gap-2.5 cursor-pointer pr-5 border-y border-r border-[#d15913] rounded-xl" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <span class="text-white text-sm lg:text-base">تماشای ویدیو</span>
                        <div class="flex justify-center items-center size-10 rounded-full border border-[#d15913]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 fill-white" viewBox="0 0 384 512">
                                <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute w-full right-0 -bottom-1/2 lg:-bottom-1/6">
            <div class="w-11/12 mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 bg-[#04162a] rounded-xl border border-white/30 p-5">
                <div class="w-full flex flex-col lg:flex-row justify-center items-center gap-6 relative pb-3 lg:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#ff893b] w-1/4" viewBox="0 0 640 512">
                        <path d="M96 80a48 48 0 1 1 96 0A48 48 0 1 1 96 80zm128 0A80 80 0 1 0 64 80a80 80 0 1 0 160 0zm96 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm0 160a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 64H378.7c54.2 0 98.4 42.5 101.2 96H160.1c2.8-53.5 47-96 101.2-96zm0-32C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3zM512 32a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 128A80 80 0 1 0 512 0a80 80 0 1 0 0 160zm16 64c44.2 0 80 35.8 80 80c0 8.8 7.2 16 16 16s16-7.2 16-16c0-61.9-50.1-112-112-112H444c2.6 10.2 4 21 4 32h80zm-336 0c0-11 1.4-21.8 4-32H112C50.1 192 0 242.1 0 304c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80h80z"/>
                    </svg>
                    <div class="w-3/4 lg:w-10/12 mx-auto flex flex-col gap-2">
                        <h3 class="font-bold text-white text-center lg:text-start">تیم حرفه ای</h3>
                        <p class="text-sm text-white lg:w-10/12 mx-auto text-center lg:text-start h-[60px] lg:h-10">ما تیمی از متخصصین و مشاورین هستیم</p>
                    </div>
                    <div class="absolute w-3/4 bottom-0 left-1/2 -translate-x-1/2 lg:translate-x-0 h-0.5 lg:w-0.5 lg:h-3/4 lg:left-0 lg:top-1/2 lg:-translate-y-1/2" style="background: #ffffff;
                        background: radial-gradient(circle, rgba(255, 255, 255, 0.27) 27%, rgba(243, 247, 253, 0) 100%);"></div>
                </div>
                <div class="w-full flex flex-col lg:flex-row justify-center items-center gap-6 relative pb-3 lg:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#ff893b] w-1/4" viewBox="0 0 640 512">
                        <path d="M55.2 1.7c-7.9-4-17.5-.7-21.5 7.2s-.7 17.5 7.2 21.5l64 32c7.9 4 17.5 .7 21.5-7.2s.7-17.5-7.2-21.5l-64-32zm544 28.6c7.9-4 11.1-13.6 7.2-21.5s-13.6-11.1-21.5-7.2l-64 32c-7.9 4-11.1 13.6-7.2 21.5s13.6 11.1 21.5 7.2l64-32zM16 160c-8.8 0-16 7.2-16 16s7.2 16 16 16H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H16zm544 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H560zM119.2 318.3c7.9-4 11.1-13.6 7.2-21.5s-13.6-11.1-21.5-7.2l-64 32c-7.9 4-11.1 13.6-7.2 21.5s13.6 11.1 21.5 7.2l64-32zm416-28.6c-7.9-4-17.5-.7-21.5 7.2s-.7 17.5 7.2 21.5l64 32c7.9 4 17.5 .7 21.5-7.2s.7-17.5-7.2-21.5l-64-32zM464 176c0 30.6-9.5 58.8-25.7 82.1c-4.1 5.9-8.7 12.3-13.6 19c-12.7 17.5-27.1 37.2-38 57.1c-8.9 16.2-13.7 33.3-16.2 49.9H403c2.2-12 5.9-23.7 11.8-34.5c9.9-18 22.2-34.9 34.5-51.8l0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C496 78.8 417.2 0 320 0S144 78.8 144 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0 0 0 0 0c12.3 16.8 24.6 33.7 34.5 51.8c5.9 10.8 9.6 22.5 11.8 34.5h32.4c-2.5-16.6-7.3-33.7-16.2-49.9c-10.9-20-25.3-39.7-38-57.1l0 0c-4.9-6.7-9.5-13-13.6-19C185.5 234.8 176 206.6 176 176c0-79.5 64.5-144 144-144s144 64.5 144 144zm-224 0c0-44.2 35.8-80 80-80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16zm80 304c-20.9 0-38.7-13.4-45.3-32h90.5c-6.6 18.6-24.4 32-45.3 32zm-80-53.3V432c0 44.2 35.8 80 80 80s80-35.8 80-80v-5.3c0-5.9-4.8-10.7-10.7-10.7H250.7c-5.9 0-10.7 4.8-10.7 10.7z"/>
                    </svg>
                    <div class="w-3/4 lg:w-10/12 mx-auto flex flex-col gap-2">
                        <h3 class="font-bold text-white text-center lg:text-start">ایده های خلاق</h3>
                        <p class="text-sm text-white lg:w-10/12 mx-auto text-center lg:text-start h-[60px] lg:h-10">محیلی برای خلق ایده ها و راهکار های نو</p>

                    </div>
                    <div class="absolute w-3/4 bottom-0 left-1/2 -translate-x-1/2 lg:translate-x-0 h-0.5 lg:w-0.5 lg:h-3/4 lg:left-0 lg:top-1/2 lg:-translate-y-1/2" style="background: #ffffff;
                        background: radial-gradient(circle, rgba(255, 255, 255, 0.27) 27%, rgba(243, 247, 253, 0) 100%);"></div>
                </div>

                <div class="w-full flex flex-col lg:flex-row justify-center items-center gap-6 relative pb-3 lg:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#ff893b] w-1/4" viewBox="0 0 512 512">
                        <path d="M219.3 292.7c-10-10-21.4-18.1-33.8-24.1C215.6 146.3 269 86.7 321.1 58.1c53.5-29.4 111.4-29.4 154.6-21.8c7.6 43.2 7.7 101.1-21.8 154.6C425.3 243 365.7 296.4 243.4 326.5c-6-12.4-14.1-23.9-24.1-33.8zM256 381.3c0-8.2-.8-16.3-2.4-24.3c37.8-9.5 70.4-21.3 98.4-34.7v80.1c0 12.1-6.8 23.2-17.7 28.6L256 470.1l0-88.9zm128 21.1l0-97.4C515.7 225.1 520.5 102.5 506.7 28.1c-2.2-11.6-11.2-20.7-22.8-22.8C409.5-8.5 286.9-3.7 207 128l-97.4 0c-24.2 0-46.4 13.7-57.2 35.4L1.7 264.8c-2.5 5-2.2 10.9 .7 15.6s8.1 7.6 13.6 7.6H130.7c24.7 0 48.5 9.8 65.9 27.3s27.3 41.2 27.3 65.9V496c0 5.5 2.9 10.7 7.6 13.6s10.6 3.2 15.6 .7l101.5-50.7c21.7-10.8 35.4-33 35.4-57.2zm-229-144c-7.9-1.6-16.1-2.4-24.3-2.4H41.9L81 177.7c5.4-10.8 16.5-17.7 28.6-17.7h80.1c-13.5 28-25.2 60.5-34.7 98.4zm-11.2 189c-11 11-29.4 19.4-52.6 24.9c-20.6 4.9-42.1 6.8-59 7.4c.6-17 2.5-38.4 7.4-59c5.5-23.2 13.9-41.6 24.9-52.6c21.9-21.9 57.4-21.9 79.3 0s21.9 57.4 0 79.3zM166.5 470c34.4-34.4 34.4-90.1 0-124.5s-90.1-34.4-124.5 0C7.7 379.7 1 446 .1 483.7c-.4 16 12.2 28.6 28.2 28.2C66 511 132.3 504.3 166.5 470zM392 144a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM368 88a56 56 0 1 0 0 112 56 56 0 1 0 0-112z"/>
                    </svg>
                    <div class="w-3/4 lg:w-10/12 mx-auto flex flex-col gap-2">
                        <h3 class="font-bold text-white text-center lg:text-start">سریع و مطمئن</h3>
                        <p class="text-sm text-white lg:w-10/12 mx-auto text-center lg:text-start h-[60px] lg:h-10">سرعت و کیفیت بالا با قیمت پایین شعار ماست</p>
                    </div>
                    <div class="absolute w-0.5 h-3/4 left-0 top-1/2 -translate-y-1/2 hidden lg:block" style="background: #ffffff;
                        background: radial-gradient(circle, rgba(255, 255, 255, 0.27) 27%, rgba(243, 247, 253, 0) 100%);"></div>
                </div>

                <div class="w-full flex flex-col lg:flex-row justify-center items-center gap-6 relative pb-3 lg:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#ff893b] w-1/4" viewBox="0 0 512 512">
                        <path d="M256 0c8.8 0 16 7.2 16 16V48.6C374.1 56.4 455.6 137.9 463.4 240H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H463.4C455.6 374.1 374.1 455.6 272 463.4V496c0 8.8-7.2 16-16 16s-16-7.2-16-16V463.4C137.9 455.6 56.4 374.1 48.6 272H16c-8.8 0-16-7.2-16-16s7.2-16 16-16H48.6C56.4 137.9 137.9 56.4 240 48.6V16c0-8.8 7.2-16 16-16zM80.7 272c7.6 84.4 74.8 151.7 159.3 159.3V384c0-8.8 7.2-16 16-16s16 7.2 16 16v47.3c84.4-7.6 151.7-74.8 159.3-159.3H384c-8.8 0-16-7.2-16-16s7.2-16 16-16h47.3C423.7 155.6 356.4 88.3 272 80.7V128c0 8.8-7.2 16-16 16s-16-7.2-16-16V80.7C155.6 88.3 88.3 155.6 80.7 240H128c8.8 0 16 7.2 16 16s-7.2 16-16 16H80.7zM256 232a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                    </svg>
                    <div class="w-3/4 lg:w-10/12 mx-auto flex flex-col gap-2">
                        <h3 class="font-bold text-white text-center lg:text-start">هدف ما</h3>
                        <p class="text-sm text-white lg:w-10/12 mx-auto text-center lg:text-start h-[60px] lg:h-10">رشد فردی، تیمی و ساخت آینده</p>
{{--                        <span class="text-sm text-white">رشد فردی</span>--}}
{{--                        <span class="text-sm text-white">تیمی</span>--}}
{{--                        <span class="text-sm text-white">و ساخت آینده</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>