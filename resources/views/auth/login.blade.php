<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Sekarang</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-[#1E252B]">
    <div class="flex items-center justify-center min-h-screen flex-col">
        <div class="px-8 py-6 mt-4 text-left bg-[#283036] shadow-lg rounded-xl border border-gray-700">
            <h3 class="text-4xl font-extrabold text-center font-jost text-white">Masuk</h3>
            @if ($errors->any())
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif
             <div class="flex items-baseline justify-between">
               <button class="px-2 py-2 mt-4 text-white border border-slate-600 rounded-lg hover:bg-pink-400 flex items-center"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.6591 24H8.44379C2.431 24 0.0258789 21.6 0.0258789 15.6V8.4C0.0258789 2.4 2.431 0 8.44379 0H15.6591C21.6719 0 24.0771 2.4 24.0771 8.4V15.6C24.0771 21.6 21.6719 24 15.6591 24Z" fill="#1877F2"/>
                    <path d="M14.4571 8.7598V12.2398H17.5838C17.8243 12.2398 17.9445 12.4798 17.9445 12.7198L17.4635 14.9998C17.4635 15.1198 17.223 15.2398 17.1028 15.2398H14.4571V23.9998H10.8495V15.3598H8.8051C8.56459 15.3598 8.44434 15.2398 8.44434 14.9998V12.7198C8.44434 12.4798 8.56459 12.3598 8.8051 12.3598H10.8495V8.3998C10.8495 6.3598 12.4128 4.7998 14.4571 4.7998H17.704C17.9446 4.7998 18.0648 4.9198 18.0648 5.1598V8.0398C18.0648 8.2798 17.9446 8.3998 17.704 8.3998H14.8179C14.5774 8.3998 14.4571 8.5198 14.4571 8.7598Z" fill="white"/>
                    </svg><span class="text-xs ml-2">Masuk Dengan Facebook</span>
                </button>
                <button class="ml-3 px-2 py-2 mt-4 text-white border border-slate-600 rounded-lg hover:bg-pink-400 flex items-center"><svg width="25" height="24" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0019 4.02133C12.9589 4.02133 14.2791 4.86489 15.0318 5.56978L17.9732 2.704C16.1666 1.02844 13.8159 0 11.0019 0C6.92565 0 3.40527 2.33422 1.69141 5.73156L5.06124 8.34311C5.9066 5.83556 8.2458 4.02133 11.0019 4.02133Z" fill="#EA4335"/>
                    <path d="M21.0072 10.6311C21.0072 9.77599 20.9378 9.15199 20.7872 8.50488H11.002V12.3644H16.7457C16.6299 13.3235 16.0046 14.768 14.615 15.7387L17.9037 18.2809C19.8724 16.4667 21.0072 13.7973 21.0072 10.6311Z" fill="#4285F4"/>
                    <path d="M5.0727 12.4568C4.85268 11.8097 4.7253 11.1163 4.7253 10.3999C4.7253 9.68345 4.85268 8.99011 5.06113 8.343L1.69129 5.73145C0.984897 7.14122 0.57959 8.72433 0.57959 10.3999C0.57959 12.0754 0.984897 13.6586 1.69129 15.0683L5.0727 12.4568Z" fill="#FBBC05"/>
                    <path d="M11.002 20.7997C13.816 20.7997 16.1784 19.8752 17.9038 18.2805L14.615 15.7383C13.7349 16.3508 12.5538 16.7783 11.002 16.7783C8.24593 16.7783 5.90674 14.9641 5.07296 12.4565L1.70312 15.0681C3.41699 18.4654 6.92579 20.7997 11.002 20.7997Z" fill="#34A853"/>
                    </svg>
                    <span class="text-xs ml-2"><a href="{{ url('login/google') }}">Masuk Dengan Google</a></span>
                </button>   
            </div>
            <h3 class="text-xs text-center font-jost text-gray-500 mt-4">Atau dengan email</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-4">
                    <div>
                                <input input id="email" type="email" placeholder="Masukan Email"
                                    class="w-full text-white px-4 py-2 mt-2 bg-[#35414B] rounded-md focus:outline-none focus:ring-1 focus:ring-pink-300" name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="mt-4">
                                <input type="password" id="password" placeholder="Kata Sandi"
                                    class="w-full text-white px-4 py-2 mt-2 bg-[#35414B] rounded-md focus:outline-none focus:ring-1 focus:ring-pink-300" name="password" required>
                    </div>
                    <div class="flex flex-col items-baseline justify-center">
                        <a href="#" class="text-sm mt-4 px-4 text-white hover:underline">Lupa Kata Sandi?</a>
                        <button class="w-full  py-2 mt-4 text-white bg-pink-500 rounded-lg hover:bg-pink-900">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
        <a href="{{ URL::previous() }}" class="text-xl mt-4 px-4 text-white underline font-jost">Kembali Ke Beranda</a>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>


