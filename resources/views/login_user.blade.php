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
        <div class="w-full mx-auto flex items-center justify-center  ">
            <div class="w-[45%] h-dvh  bg-[#0A131F]  flex items-center justify-center max-lg:hidden">
                <img src="{{asset('img/file_00000000aa4481f497950572f58dd28b-removebg-preview.png')}}" alt="">
            </div>
            <div class="w-[55%] max-md:w-[95%] min-h-dvh  flex flex-col items-center justify-center m-5 rounded-[15px] gap-7 max-lg:w-full">
                <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex flex-col gap-3 items-center">
                    <div class="w-[65px] h-[65px] rounded-full flex items-center justify-center shadow-md  bg-[#EDE1D8] ">
                        <svg class = "size-8 fill-[#E07020]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 128v64H320V128c0-53-43-96-96-96s-96 43-96 96zM96 192V128C96 57.3 153.3 0 224 0s128 57.3 128 128v64h16c44.2 0 80 35.8 80 80V432c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V272c0-44.2 35.8-80 80-80H96zM32 272V432c0 26.5 21.5 48 48 48H368c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48H80c-26.5 0-48 21.5-48 48z"/></svg>
                    </div>
                    <span class = "text-[#EA8332] text-[25px]">ورود<span class = "text-[#0A131D]">به حساب کاربری </span></span>
                    <p class = "text-[#3A2D26] max-md:text-[13px]">خوش امدید!لطفا وارد حساب کابری خود شوید</p>
                </div>
                <div class="w-full flex flex-col items-center gap-6 justify-center ">
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                        <form action="{{route('user.store_login')}}" method = "post">
                            @csrf
                            <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <input class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] text-right" type="text" name="phonenumber" id="input_phonenumber" placeholder = "شماره ی انام کاربری" value = "{{old('phonenumber')}}" required>
                            @error('phonenumber')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] relative">
                            <svg id = "svg" class = "size-6 absolute left-3 top-[15px] cursor-pointer" onclick = "text_password(this)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M118 373c-39.8-38.3-67.9-83.7-83.2-117c15.3-33.3 43.4-78.6 83.2-117c44.6-42.9 101.5-75 170-75s125.4 32.1 170 75c39.8 38.3 67.9 83.7 83.2 117c-15.3 33.3-43.4 78.6-83.2 117c-44.6 42.9-101.5 75-170 75s-125.4-32.1-170-75zM288 480c158.4 0 258-149.3 288-224C546 181.3 446.4 32 288 32S30 181.3 0 256c30 74.7 129.6 224 288 224zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                            <svg class = "size-5 absolute right-3 top-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 128v64H320V128c0-53-43-96-96-96s-96 43-96 96zM96 192V128C96 57.3 153.3 0 224 0s128 57.3 128 128v64h16c44.2 0 80 35.8 80 80V432c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V272c0-44.2 35.8-80 80-80H96zM32 272V432c0 26.5 21.5 48 48 48H368c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48H80c-26.5 0-48 21.5-48 48z"/></svg>
                            <div id = "line" class="w-[25px] h-[2px] hidden bg-black -rotate-30 absolute left-[12px] top-7"></div>
                            <div class="w-full flex gap-3 " id = "div1">
                                <div class = "hidden w-[55%] max-md:w-[95%] h-[50px] max-xl:w-[70%] bg-[#0A131D] rounded-[8px]  items-center gap-3 justify-center cursor-pointer active:bg-black hover:bg-[#003d83] text-white flex" onclick = "send_code(this , 'code')" id = "button_code">ارسال کد</div>
                                <input id = "input_pass_or_code" class = "w-full p-6 h-[40px] rounded-[8px] bg-[#cfc0b6] border border-[#C8916A] pr-10 outline-none transition-all duration-600 focus:border-[#3A2D26] focus:bg-[#EDE0D7] text-right" type="text" name="password" id="password" placeholder = "رمز عبور" value = "{{old('password')}}" required>
                                <input type="hidden" name="end_code" id="end_code" value = 0>
                            </div>
                            @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="w-[55%] justify-between  max-md:w-[95%] max-xl:w-[70%] flex gap-2 items-center">
                            <span onclick = "change(this)" class = "cursor-pointer">ورود با ارسال کد</span>
                        <a href="" class = "text-[#EA8332] max-md:text-[14px]">رمز عبور را فراموش کرده اید</a>
                    </div>
                      <button class="w-[55%] max-md:w-[95%] h-[50px] max-xl:w-[70%] flex bg-[#0A131D] rounded-[8px]  items-center gap-3 justify-center cursor-pointer active:bg-black hover:bg-[#003d83]">
                        <span class = " text-white  ">ورود</span>
                        <svg class = "size-5  fill-[#EA8332] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                    </button>
                </form>
                <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex items-center gap-2">
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] h-[0.5px] bg-[#3A2D26]"></div>
                    <span>یا</span>
                    <div class="w-[55%] max-md:w-[95%] max-xl:w-[70%] h-[0.5px] bg-[#3A2D26]"></div>
                </div>
                <a href = "{{route('user.create')}}" class="w-[55%] max-md:w-[95%] max-xl:w-[70%] flex items-center justify-center border-0.5 border-[#85512F] shadow-[#85512F] shadow-md gap-2 rounded-[8px] h-[50px]">
                    <span class = "text-[#EA8332] text-[20px] max-md:text-[15px]">وارد شوید</span>
                    <span class = "text-[#3A2D26] text-[20px] max-md:text-[15px]">قبلا حساب کاردبری دارید؟</span>
                </a>
            </div>
        </div>
        <!-- <div class="w-100 h-20 bg-red-100 flex justify-between outline-8 outline-pink-500">
            <div class="size-5 bg-blue-500"></div>
            <input type="text" class="w-full">
            <div class="size-5 bg-green-500"></div>
        </div> -->
        <!-- <p id="d">۲:۰۰</p>
        <button onclick="start()">شروع</button> -->
    </section>
    <script>
        

let t=null, s=120;
const d=document.getElementById('d');



        setTimeout(function(){
                document.getElementById('messagee').classList.add('opacity-0')
            }, 4000);

        function change(el){
            let div = document.getElementById('div1')
            let svg = document.getElementById('svg')
            let line = document.getElementById('line')
            if (div.children[0].classList.contains('hidden')) {
                svg.classList.remove('left-3')
                line.classList.remove('left-[12px]')
                line.classList.add('left-59')
                svg.classList.add('left-59')
                div.children[0].classList.remove('hidden')
                div.children[1].placeholder = "کد"
                div.children[1].name = "code"
                el.innerText = "ورود با رمز عبور"
            }else{
                line.classList.add('left-[12px]')
                line.classList.remove('left-59')
                svg.classList.add('left-3')
                svg.classList.remove('left-59')
                div.children[0].classList.add('hidden')
                div.children[1].name = "password"
                div.children[1].placeholder = "رمز عبور"
                el.innerText = "ورود با ارسال کد"
                
            }
        }
        
        function text_password(){
            let input = document.getElementById('input_pass_or_code')
            let line = document.getElementById('line')
            if (line.classList.contains('hidden')) {
                input.type = "password"
                line.classList.remove('hidden')
            }else{
                input.type = "text"
                line.classList.add('hidden')
            }
        }

           function send_code(el,code){
            let phonenumber = document.getElementById('input_phonenumber').value
            let end_code = document.getElementById('end_code')
            let button_code = document.getElementById('button_code')
            if (!phonenumber) {
                alert("لطفا شماره تلفن را وارد نمایید")
                return
            }

              $.ajax({
                  url: "{{route('user.send_code')}}",
                  type: "POST",
                  dataType: "json",
                  data: {'_token' : "{{csrf_token()}}" , 'phonenumber' : phonenumber , 'code' : code},
                  success: function(dat){
                    if (dat == "yes") {
                        alert("لطفا اول ثبت نام کنید")
                        return
                    }
                    end_code.value = dat
                    button_code.innerHTML = `<span>2:00</span>`
                    button_code.classList
                     if(t) return;
                        t=setInterval(()=>{
                        s--;
                        console.log("yes")
                        let m=Math.floor(s/60), sec=s%60;
                        button_code.textContent=m+':'+String(sec).padStart(2,'0');
                        button_code.removeAttribute('onclick');
                        button_code.classList.add('cursor-no-drop')
                        button_code.classList.add('bg-[#89898a]')
                        button_code.classList.remove('cursor-pointer')
                        button_code.classList.remove('hover:bg-[#003d83]')
                        button_code.classList.remove('active:bg-black')
                        button_code.classList.remove('bg-[#0A131D]')
                        if(s<=0){
                            clearInterval(t);t=null;s=120;
                            button_code.textContent='ارسال کد';
                            button_code.classList.remove('cursor-no-drop')
                            button_code.classList.remove('bg-[#89898a]')
                            button_code.classList.add('cursor-pointer')
                            button_code.classList.add('active:bg-black')
                            button_code.classList.add('hover:bg-[#003d83]')
                            button_code.classList.add('bg-[#0A131D]')
                            button_code.setAttribute('onclick' , send_code(this , 'code'))
                            delete_code(dat)
                        }
                            
                            },1000);
                        }
                    }) 
             }
             function delete_code(del_code){
                $.ajax({
                  url: "{{route('user.del_code')}}",
                  type: "POST",
                  dataType: "json",
                  data: {'_token' : "{{csrf_token()}}" , 'del_code' : del_code},
                  success: function(){

                  }
                })
             }
    </script>
</body>
</html>