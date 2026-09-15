<!DOCTYPE html>
<html lang="en">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "bg-[#EDE1D8] relative">
     @if(session('message'))
    <div id = "messagee"  class="py-5 mx-8 rounded-lg shadow-lg bg-gray-300 fixed top-5 left-10 z-40 flex justify-center items-center transition-all duration-300">
        <span  class = "font-bold text-sm text-slate-500e">{{session('message')}}</span>
    </div>
    @endif
    <section class = "w-full">
        <div class="w-full mx-auto flex items-center justify-center max-lg:flex-col ">
            <div class="w-[45%] h-dvh  bg-[#0A131F] flex items-center justify-center max-lg:hidden">
                <img src="{{asset('img/file_00000000aa4481f497950572f58dd28b-removebg-preview.png')}}" alt="">
            </div>
            <div class="w-[55%] max-md:w-[95%] min-h-dvh  flex flex-col items-center justify-center m-5 rounded-[15px] gap-7 max-lg:w-full">
                <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex flex-col gap-3 items-center">
                    <div class="w-[65px] h-[65px] rounded-full flex items-center justify-center shadow-md  bg-[#EDE1D8] ">
                        <svg xmlns="http://www.w3.org/2000/svg" class = "size-8 fill-[#E07020]" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 32a96 96 0 1 1 0 192 96 96 0 1 1 0-192zm0 224A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 80h91.4c80 0 145 64.3 146.3 144H32c1.2-79.7 66.2-144 146.3-144zm0-32C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zM512 304c0 8.8 7.2 16 16 16s16-7.2 16-16V224h80c8.8 0 16-7.2 16-16s-7.2-16-16-16H544V112c0-8.8-7.2-16-16-16s-16 7.2-16 16v80H432c-8.8 0-16 7.2-16 16s7.2 16 16 16h80v80z"/></svg>
                    </div>
                    <span class = "text-[#EA8332] text-[25px]">ثبت نام <span class = "text-[#0A131D]">در کایسو</span></span>
                    <p class = "text-[#3A2D26] max-md:text-[13px]">با ثبت نام در کایسو از خدمات ویژه ما بهره مند شوید</p>
                </div>
                <div class="w-full flex flex-col items-center gap-6 justify-center ">
                    <form class="w-full flex flex-col items-center gap-6 justify-center " action="{{route('user.store')}}" method = "post">
                        @csrf
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                            <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <input class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 text-right outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] " type="text" name="name" id="name" placeholder = "نام اختیاری" value = "{{old('name')}}">
                             @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                             @enderror
                        </div>
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                            <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <input class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 text-right outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] " type="text" name="family" id="family" placeholder = "فامیلی اختیاری" value = "{{old('family')}}">
                            @error('family')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                            <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
                            <input id = "input_phonenumber" class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 text-right outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] " type="text" name="phonenumber"  placeholder = "شماره تلفن" value = "{{old('phonenumber')}}">
                            @error('phonenumber')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                            
                        <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 128v64H320V128c0-53-43-96-96-96s-96 43-96 96zM96 192V128C96 57.3 153.3 0 224 0s128 57.3 128 128v64h16c44.2 0 80 35.8 80 80V432c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V272c0-44.2 35.8-80 80-80H96zM32 272V432c0 26.5 21.5 48 48 48H368c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48H80c-26.5 0-48 21.5-48 48z"/></svg>
                            <input class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 text-right outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] " type="text" name="password" id="password" placeholder = "رمز" value = "{{old('password')}}">
                            <input type="hidden" name="end_code" id="end_code" >
                            @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative flex gap-1 flex-col ">
                            <div class="w-full flex gap-3">

                                <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M399.1 1.1c-12.7-3.9-26.1 3.1-30 15.8l-144 464c-3.9 12.7 3.1 26.1 15.8 30s26.1-3.1 30-15.8l144-464c3.9-12.7-3.1-26.1-15.8-30zm71.4 118.5c-9.1 9.7-8.6 24.9 1.1 33.9L580.9 256 471.6 358.5c-9.7 9.1-10.2 24.3-1.1 33.9s24.3 10.2 33.9 1.1l128-120c4.8-4.5 7.6-10.9 7.6-17.5s-2.7-13-7.6-17.5l-128-120c-9.7-9.1-24.9-8.6-33.9 1.1zm-301 0c-9.1-9.7-24.3-10.2-33.9-1.1l-128 120C2.7 243 0 249.4 0 256s2.7 13 7.6 17.5l128 120c9.7 9.1 24.9 8.6 33.9-1.1s8.6-24.9-1.1-33.9L59.1 256 168.4 153.5c9.7-9.1 10.2-24.3 1.1-33.9z"/></svg>
                                <div class="w-[55%] h-[50px] text-white  bg-[#0A131D] rounded-[8px]  items-center gap-3 justify-center cursor-pointer active:bg-black hover:bg-[#003d83] flex" onclick = "send_code(this , 'code_create')">ارسال کد</div>
                                <input  class = "w-[90%] p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 text-right outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] " type="text" name="code" id="code" placeholder = "کد" value = "{{old('code')}}">
                            </div>
                            @error('code')
                            <div class="text-red-500 self-start">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex gap-2">
                        <input type="checkbox" onclick = "sumbite(this)">
                        <p>با <span class = "text-[#EF8D3B]">شرایط و قوانین </span> کایسو موافقم</p>
                    </div>
                    <button id = "button_create" disabled="true" class="w-[55%] max-md:w-[95%] h-[50px] max-xl:w-[70%] flex cursor-no-drop bg-[#89898a] rounded-[8px]  items-center gap-3 justify-center ">
                        <span class = " text-white  ">ثبت نام</span>
                        <svg class = "size-5  fill-[#EA8332] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                    </button>
                </form>
                <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex items-center gap-2">
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] h-[0.5px] bg-[#3A2D26]"></div>
                    <span>یا</span>
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] h-[0.5px] bg-[#3A2D26]"></div>
                </div>
                <a href = "{{route('user.login')}}" class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex items-center justify-center border-0.5 border-[#85512F] shadow-[#85512F] shadow-md gap-2 rounded-[8px] h-[50px] transition-all duration-300">
                    <span class = "text-[#EA8332] text-[20px] max-md:text-[15px]">وارد شوید</span>
                    <span class = "text-[#3A2D26] text-[20px] max-md:text-[15px]">قبلا حساب کاردبری دارید؟</span>
                </a>
            </div>
        </div>
    </section>
    <script>
         setTimeout(function(){
                document.getElementById('messagee').classList.add('opacity-0')
            }, 4000);

          function sumbite(el){
            let button_create = document.getElementById('button_create')
            if (button_create.classList.contains('cursor-no-drop')) {
                button_create.classList.remove('bg-[#89898a]')
                button_create.classList.add('bg-[#0A131D]')
                button_create.classList.remove('cursor-no-drop')
                button_create.classList.add('cursor-pointer')
                button_create.classList.add('hover:bg-[#003d83]')
                button_create.classList.add('active:bg-black')
                button_create.removeAttribute('disabled')
            }else{
                button_create.classList.add('bg-[#89898a]')
                button_create.classList.remove('bg-[#0A131D]')
                button_create.classList.add('cursor-no-drop')
                button_create.classList.remove('cursor-pointer')
                button_create.classList.remove('hover:bg-[#003d83]')
                button_create.classList.remove('active:bg-black')

            }
          }
          function send_code(el , code_create){
            console.log(code_create)
            let phonenumber = document.getElementById('input_phonenumber').value
            let end_code = document.getElementById('end_code')
            if (!phonenumber) {
                alert("لطفا شماره تلفن را وارد نمایید")
                return;
            }
              $.ajax({
                  url: "{{route('user.send_code')}}",
                  type: "POST",
                  dataType: "json",
                  data: {'_token' : "{{csrf_token()}}" , 'phonenumber' : phonenumber , 'code_create' : code_create},
                  success: function(dat){
                        if (dat == "yes_no") {
                            alert("کاربر قبلا با این شماره ثبت نام کرده است")
                            return
                        }
                        end_code.value = dat
                    }   
                }) 
            }
    </script>
</body>
</html>