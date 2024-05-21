<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graduation project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

         <style>
            #background {
                position: fixed; /* يمكن استخدام absolute أيضاً حسب الحاجة */
                left: 0;
                top: 0;
                object-fit: cover;
                height: auto;
                width: 100%; /* يغطي الصورة بالكامل مع الحفاظ على نسبة العرض إلى الارتفاع */
                z-index: -1; /* لضمان أن تكون الصورة خلف المحتوى */
                opacity:0.5;
            }
        </style>
         <style>
            .top-left {
                position: absolute;
                top: 2;
                left: 1%;
                width: 50px; /* العرض المحدد */
                height: 50px; /* الارتفاع المحدد */
            }
        </style>
        <style>
            .top-right {
                position: absolute;
                top: 10px; /* مسافة من الحافة العلوية */
                right: 10px; /* مسافة من الحافة اليمنى */
                display: flex;
                gap: 10px; /* مسافة بين الروابط */
            }

            .top-right a {
                font-size: 20px; /* تكبير حجم الخط */
                color: rgb(7, 5, 31); /* تغيير لون الخط */
                text-decoration: none; /* إزالة الخط الظاهر تحت الكتابة */
            }

            .top-right a:hover {
                color: rgb(10, 22, 184); /* تغيير لون الخط عند التمرير */
            }
        </style>
         <style>
            .top-right {
                position: absolute;
                top: 0;
                right: 0;
                margin: 10px; /* مسافة من الحافة العلوية واليمنى، يمكن تعديلها حسب الحاجة */
            }
        </style>
        <style>
        .welcome-text {
    font-size: 3rem; /* حجم النص */
    font-weight: bold; /* خط عريض */
    color: #1b1a1a; /* لون النص */
    text-align: center; /* محاذاة النص إلى الوسط */
    position: absolute; /* موقع مطلق للنص */
    top: 18%; /* في وسط الصفحة عمودياً */
    left: 50%; /* في وسط الصفحة أفقياً */
    transform: translate(-50%, -50%); /* لتحريك النص إلى الوسط بدقة */
}
</style>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50">
            <img id="background" src="2024-05-20 05_20_39-Greenshot.png"  />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                  <h1 class="welcome-text">Welcome to Graduation project management and archiving system</h1>
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <div class="centered-flex">
                                <img src="{{ asset('332-3321467_graduate-hat-icon-graduation-cap-logo-png-transparent.png') }}"
                                alt="Description of the image"
                                class="top-left">
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <div class="top-right">
                                <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] top-right">
                                Dashboard
                             </a>
                                @else
                                <div class="top-right">
                                    <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Log in
                                 </a>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Register
                                 </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                </div>
            </div>
        </div>
    </body>
</html>
