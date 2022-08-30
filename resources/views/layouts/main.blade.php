<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Styles -->
     @vite('resources/css/app.css')
</head>
<body>
    <header class="container-xl mx-auto flex justify-around mt-5">
        <div class="logo font-sans font-medium text-2xl">
            SMITH REALTY
        </div>
        <div class="header_menu  space-x-14 content-end">
            <a class="hover:bg-violet-600" href="#">Listing</a>
            <a class="" href="#">Home</a>
            <a class="" href="#">Proprety</a>
            <a class="" href="#">Pages</a>
        </div>
        <div class="header_account flex justify-between space-x-10">
            <div class="account border w-8 h-8 border-blue-700 rounded-full self-center"><i class="fa-solid fa-heart text-blue-700 p-2"></i></div>
            <div class="account border w-8 h-8 border-blue-700 rounded-full"><i class="fa-solid fa-user text-blue-700 p-2"></i></div>
        </div>
    </header>
    @yield('content')
</body>
</html>