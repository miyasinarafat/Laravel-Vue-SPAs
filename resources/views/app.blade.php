<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laracasts Assets</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans">
<div id="app">
    <header class="py-6 px-8 mb-8" style="background: url('https://assets.laracasts.com/images/splash.svg') 0px 15px no-repeat;">
        <h1>
            <img src="https://assets.laracasts.com/images/logo.svg" alt="">
        </h1>
    </header>

    <div class="container px-6 pb-10">
        <main class="flex">
            <aside class="w-64 pt-8">
                <div class="mb-10">
                    <h5 class="uppercase font-bold mb-5">The Brand</h5>
                    <ul>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'logo' }" exact>Logo</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'logo-symbol' }">Logo Symbol</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'colors' }">Colors</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'typography' }">Typography</router-link></li>
                    </ul>
                </div>
                <div>
                    <h5 class="uppercase font-bold mb-5">Doodles</h5>
                    <ul>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'mascot' }">Mascot</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'illustrations' }">Illustrations</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'loaders-animations' }">Loaders and Animations</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'wallpapers' }">Wallpapers</router-link></li>
                    </ul>
                </div>
            </aside>

            <div class="primary flex-1">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
