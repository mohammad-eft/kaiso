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
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white" viewBox="0 0 448 512">
                <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/>
            </svg>
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 relative">
                <img src="{{ asset('img/logo.png') }}" class="max-w-7 lg:max-w-10" alt="">
                <span class="text-white text-2xl">کایسو</span>
                <span class="text-white absolute right-1/2 translate-x-1/2 -bottom-8 text-sm w-40 text-center lg:pr-0 pr-5">راهکاری که اهمیت دارد</span>
            </a>
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
                <a href="#" class="px-5 text-white py-2 rounded-xl" style='background: #d15913;
                    background: linear-gradient(0deg, rgba(209, 89, 19, 1) 0%, rgba(255, 137, 59, 1) 100%);'>تماس با ما</a>
            </div>
        </div>
    </header>
    <div class="2xl:container mx-auto w-full bg-[#000f24] rounded-b-[10%] flex flex-col lg:flex-row items-center max-h-[520px]">
        <div class="w-7/12 rounded-br-[10%]">
            <img src="{{ asset('img/teamm.png') }}" class="w-full max-h-[520px] rounded-br-[10%]" alt="" style="box-shadow: inset 0 0 20px #000F24;">
        </div>
        <div class="w-5/12 h-[510px] relative -right-20 flex flex-col lg:flex-row items-center" style="background: #000F24;
                background: linear-gradient(90deg, rgba(0, 15, 36, 1) 90%, rgba(0, 15, 36, 0) 100%);">
            <div class="mr-20 flex flex-col">
                <span class="text-[#ff7611] text-xl">ما کایسو هستیم</span>
                <h1 class="text-5xl text-white leading-[1.5]">
                    ما کایسو هستیم
                    <br>
                    ما
                    <span class="text-[#ff7611]"> راهکار </span>
                    خلق میکنیم
                </h1>
                <p class="text-white mt-4 leading-[1.8]">
                    ما در کایسو،  خلق راهکار های هوشمندانه برای رشد و موفقیت کسب و کار ها، فناوری و راهکاری مناسب با نیاز های کسب و کار های رشدی رشد واقعی را شتاب میدهیم.
                </p>
                <div class="flex flex-row items-center gap-8 mt-5">
                    <a href="#" class="flex flex-row items-center gap-2.5 px-5 py-2.5 cursor-pointer rounded-xl" style='background: #d15913;
                        background: linear-gradient(0deg, rgba(209, 89, 19, 1) 0%, rgba(255, 137, 59, 1) 100%);'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white" viewBox="0 0 448 512">
                            <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                        </svg>
                        <span class="text-white">خدمات ما</span>
                    </a>
                    <a href="#" class="flex flex-row items-center gap-2.5 cursor-pointer pr-5 border-y border-r border-[#d15913] rounded-xl" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <span class="text-white">تماشای ویدیو</span>
                        <div class="flex justify-center items-center size-10 rounded-full border border-[#d15913]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 fill-white" viewBox="0 0 384 512">
                                <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>