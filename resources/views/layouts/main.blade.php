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
    <header>
        <div class="logo">
            Smith Realty
        </div>
        <div class="header_menu">
            <a href="#">Home</a>
            <a href="#">Listing</a>
            <a href="#">Proprety</a>
            <a href="#">Pages</a>
        </div>
        <div class="header_account">
            <div class="account"><i class="fa-solid fa-heart"></i></div>
            <div class="account"><i class="fa-solid fa-user"></i></div>
        </div>
    </header>
    @yield('content')
</body>
</html>