<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
                .active a {
                    color: red;
                    text-decoration:none;
                }
        
    </style>

</head>
<body>

    
    <nav>

               
            <li class=" {{ setActive('home') }} "> <a href="/">Home</a></li>
            <li class=" {{ setActive('about') }} "><a href="/about">about</a></li>
            <li class=" {{ setActive('contact') }} "><a href="/contact">contact</a></li>
            <li class=" {{ setActive('portafolio') }} "><a href="/portafolio">portafolio</a></li>
            <li class=" {{ setActive('compras') }} "><a href="/compras">Compras</a></li>
            <li class=" {{ setActive('ciudad') }} "><a href="/ciudad">Ciudad</a></li>
            
    </nav>
    
      @yield('content')

</body>
</html>