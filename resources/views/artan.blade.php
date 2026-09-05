<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaiso</title>
    <script src="{{asset('js/tailwind.js')}}"></script>
    <!-- <link rel="stylesheet" href="asstes/css/index.css"> -->
</head>

<body>




    <style>
        /* روت رنگی کایسو */
        :root {
            /* :large_blue_circle: سرمه‌ای */
            --primary-dark: #0A131F;

            /* 🟠 نارنجی اصلی */
            --primary: #EF8D3B;

            /* 🟧 نارنجی تیره */
            --primary-dark-orange: #E07020;

            /* 🟤 قهوه‌ای گرم */
            --warm-brown: #C8916A;

            /* 🟫 قهوه‌ای تیره */
            --dark-brown: #5F3820;

            /* 🟡 کرم - پس‌زمینه اصلی */
            --background: #EDE1D8;

            /* 🤍 کرم روشن - کارت‌ها */
            --card: #F3E9E0;

            /* :white_circle: سفید گرم */
            --white-warm: #FFF8F2;

            /* :black_circle: مشکی - متن اصلی */
            --text: #0B080A;
        }
    </style>



    <!-- div parent -->
    <div class="max-w-[1700px] mt-10">
        <!-- نمونه کار -->
        <section class="w-full py-8 bg-[VAR(--primary-dark)]">
            <div class="w-11/12 h-auto mx-auto flex overflow-x-auto justify-start">
                <div class="min-w-65 w-70 flex gap-3 flex-col items-center justify-center">
                    <img src="assets/img/Portfolio/Portfolio1.jpg" alt=""
                        class="w-11/12 h-50 mx-auto object-cover rounded-xl">
                    <span class="text-center text-[var(--white-warm)]">
                        وب سایت شرکتی
                        <br>
                        نمونه وب
                    </span>
                </div>
                <div class="min-w-65 w-70 flex gap-3 flex-col items-center justify-center">
                    <img src="{{asset('img/Portfolio/Portfolio2.jpg')}}" alt=""
                        class="w-11/12 h-50 mx-auto object-cover rounded-xl">
                    <span class="text-center text-[var(--white-warm)]">
                        وب سایت شرکتی
                        <br>
                        نمونه وب
                    </span>
                </div>
                <div class="min-w-65 w-70 flex gap-3 flex-col items-center justify-center">
                    <img src="{{asset('img/Portfolio/Portfolio3.jpg')}}" alt=""
                        class="w-11/12 h-50 mx-auto object-cover rounded-xl">
                    <span class="text-center text-[var(--white-warm)]">
                        وب سایت شرکتی
                        <br>
                        نمونه وب
                    </span>
                </div>
                <div class="min-w-65 w-70 flex gap-3 flex-col items-center justify-center">
                    <img src="{{asset('img/Portfolio/Portfolio4.jpg')}}" alt=""
                        class="w-11/12 h-50 mx-auto object-cover rounded-xl">
                    <span class="text-center text-[var(--white-warm)]">
                        وب سایت شرکتی
                        <br>
                        نمونه وب
                    </span>
                </div>
                <div class="min-w-65 w-70 flex gap-3 flex-col items-center justify-center">
                    <img src="{{asset('img/Portfolio/Portfolio5.jpg')}}" alt=""
                        class="w-11/12 h-50 mx-auto object-cover rounded-xl">
                    <span class="text-center text-[var(--white-warm)]">
                        وب سایت شرکتی
                        <br>
                        نمونه وب
                    </span>
                </div>
            </div>
        </section>
        <!-- کامیونیتی -->
        <section class="w-full py-8 bg-[var(--background)]">
            <!-- بخش بالایی یعنی کامیونیتی -->
            <div class="w-11/12 mx-auto">
                <div class="w-full flex justify-center pb-10">
                    <span class="font-bold text-[1.5rem] md:text-[1.8rem] lg:text-[2rem] text-[var(--text)]">کامیونیتی
                        کایسو</span>
                </div>
                <!-- بخش پایینی کامیونیتی -->
                <div class="w-11/12 mx-auto flex flex-wrap justify-around">
                    <div class="w-40 flex flex-col gap-2 itemms-center">
                        <div class="w-full flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <circle cx="18" cy="17" r="6" stroke="#0A131D" stroke-width="2.8" />
                                <circle cx="31" cy="18" r="5" stroke="#0A131D" stroke-width="2.8" />
                                <path d="M7 37C7 30.9 11.7 27 18 27C24.3 27 29 30.9 29 37" stroke="#0A131D"
                                    stroke-width="2.8" stroke-linecap="round" />
                                <path d="M28 28C34 28 39 31.5 39 37" stroke="#EA8332" stroke-width="2.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center text-center flex flex-col">
                            <span class="text-[var(--primary)]">پروژه‌های مشتری</span>
                            <span class="text-[var(--text)]">
                                همکاری در پروژه‌های
                                <br>
                                مشترک کاری
                            </span>
                        </div>

                    </div>
                    <div class="w-40 flex flex-col gap-2 itemms-center">
                        <div class="w-full flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <circle cx="18" cy="17" r="6" stroke="#0A131D" stroke-width="2.8" />
                                <circle cx="31" cy="18" r="5" stroke="#0A131D" stroke-width="2.8" />
                                <path d="M7 37C7 30.9 11.7 27 18 27C24.3 27 29 30.9 29 37" stroke="#0A131D"
                                    stroke-width="2.8" stroke-linecap="round" />
                                <path d="M28 28C34 28 39 31.5 39 37" stroke="#EA8332" stroke-width="2.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center text-center flex flex-col">
                            <span class="text-[var(--primary)]">پروژه‌های مشتری</span>
                            <span class="text-[var(--text)]">
                                همکاری در پروژه‌های
                                <br>
                                مشترک کاری
                            </span>
                        </div>

                    </div>
                    <div class="w-40 flex flex-col gap-2 itemms-center">
                        <div class="w-full flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <circle cx="18" cy="17" r="6" stroke="#0A131D" stroke-width="2.8" />
                                <circle cx="31" cy="18" r="5" stroke="#0A131D" stroke-width="2.8" />
                                <path d="M7 37C7 30.9 11.7 27 18 27C24.3 27 29 30.9 29 37" stroke="#0A131D"
                                    stroke-width="2.8" stroke-linecap="round" />
                                <path d="M28 28C34 28 39 31.5 39 37" stroke="#EA8332" stroke-width="2.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center text-center flex flex-col">
                            <span class="text-[var(--primary)]">پروژه‌های مشتری</span>
                            <span class="text-[var(--text)]">
                                همکاری در پروژه‌های
                                <br>
                                مشترک کاری
                            </span>
                        </div>
                    </div>
                    <div class="w-40 flex flex-col gap-2 itemms-center">
                        <div class="w-full flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <circle cx="18" cy="17" r="6" stroke="#0A131D" stroke-width="2.8" />
                                <circle cx="31" cy="18" r="5" stroke="#0A131D" stroke-width="2.8" />
                                <path d="M7 37C7 30.9 11.7 27 18 27C24.3 27 29 30.9 29 37" stroke="#0A131D"
                                    stroke-width="2.8" stroke-linecap="round" />
                                <path d="M28 28C34 28 39 31.5 39 37" stroke="#EA8332" stroke-width="2.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center text-center flex flex-col">
                            <span class="text-[var(--primary)]">پروژه‌های مشتری</span>
                            <span class="text-[var(--text)]">
                                همکاری در پروژه‌های
                                <br>
                                مشترک کاری
                            </span>
                        </div>

                    </div>
                    <div class="w-40 flex flex-col gap-2 itemms-center">
                        <div class="w-full flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <circle cx="18" cy="17" r="6" stroke="#0A131D" stroke-width="2.8" />
                                <circle cx="31" cy="18" r="5" stroke="#0A131D" stroke-width="2.8" />
                                <path d="M7 37C7 30.9 11.7 27 18 27C24.3 27 29 30.9 29 37" stroke="#0A131D"
                                    stroke-width="2.8" stroke-linecap="round" />
                                <path d="M28 28C34 28 39 31.5 39 37" stroke="#EA8332" stroke-width="2.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center text-center flex flex-col">
                            <span class="text-[var(--primary)]">پروژه‌های مشتری</span>
                            <span class="text-[var(--text)]">
                                همکاری در پروژه‌های
                                <br>
                                مشترک کاری
                            </span>
                        </div>
                    </div>
                </div>
                <!-- عضویت در کامیونیتی -->
                <div class="w-11/12 mx-auto flex justify-center itemms-center pt-10">
                    <div class="flex gap-2 py-1 px-4 bg-[var(--dark-brown)] rounded-lg itemms-center">

                        <span class="text-nowrap text-[var(--card)]">عضویت در کامیونیتی</span>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="size-6 fill-[var(--card)]" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.3508 12.7499L11.2096 17.4615L10.1654 18.5383L3.42264 11.9999L10.1654 5.46148L11.2096 6.53833L6.3508 11.2499L21 11.2499L21 12.7499L6.3508 12.7499Z"
                                 />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>