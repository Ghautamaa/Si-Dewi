<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

@yield('container')

<body class="bg-slate-200">
    <div class="container-fluid ">
        {{-- Navbar start --}}
        @include('partials.navbar')
        {{-- Navbar End --}}

        {{-- content Start --}}
        <div class="container-fluid mx-auto">
        {{-- artikel start --}}
        <div class="p-36">
            <div class="grid grid-cols-3 gap-4">
                <div class="grid grid-cols-1 gap-4 col-span-2 row-start-2 mx-auto w-full">
                        
                        <div class="border-2 border-gray-400 bg-primary">
                            <article class="">
                                <div class="border-black">
                                    <div class="image-card">
                                        <img width="1000" height="600" src="{{ asset('storage\img\background.jpg') }}" class="" alt=""> 
                                    </div>
                                    <div class="headlight text-white p-5 pt-7">
                                        <h5 class="pt-blog-title font-bold"><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Pemerintah Kabupaten Konoha Melakukan pembanguna!!</a></h5>
                                        <p>Have you missed the recent Honkai: Star Rail stream? No worries! We’ve got a summary of the upcoming 2.3 patch for you!</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="border-2 border-gray-400 bg-primary">
                            <article class="">
                                <div class="border-black">
                                    <div class="image-card">
                                        <img width="1000" height="600" src="{{ asset('storage\img\background.jpg') }}" class="" alt=""> 
                                    </div>
                                    <div class="headlight text-white p-5 pt-7">
                                        <h5 class="pt-blog-title font-bold"><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Pemerintah Kabupaten Konoha Melakukan pembanguna!!</a></h5>
                                        <p>Have you missed the recent Honkai: Star Rail stream? No worries! We’ve got a summary of the upcoming 2.3 patch for you!</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="border-2 border-gray-400 bg-primary">
                            <article class="">
                                <div class="border-black">
                                    <div class="image-card">
                                        <img width="1000" height="600" src="{{ asset('storage\img\background.jpg') }}" class="" alt=""> 
                                    </div>
                                    <div class="headlight text-white p-5 pt-7">
                                        <h5 class="pt-blog-title font-bold"><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Pemerintah Kabupaten Konoha Melakukan pembanguna!!</a></h5>
                                        <p>Have you missed the recent Honkai: Star Rail stream? No worries! We’ve got a summary of the upcoming 2.3 patch for you!</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="border-2 border-gray-400 bg-primary">
                            <article class="">
                                <div class="border-black">
                                    <div class="image-card">
                                        <img width="1000" height="600" src="{{ asset('storage\img\background.jpg') }}" class="" alt=""> 
                                    </div>
                                    <div class="headlight text-white p-5 pt-7">
                                        <h5 class="pt-blog-title font-bold"><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Pemerintah Kabupaten Konoha Melakukan pembanguna!!</a></h5>
                                        <p>Have you missed the recent Honkai: Star Rail stream? No worries! We’ve got a summary of the upcoming 2.3 patch for you!</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                {{-- side --}}
                <div class="grid grid-cols-1 gap-4 row-start-2 ml-20">
                    <aside class="sidebar">
                    <div class="border-2 bg-primary border-gray-400 p-4">
                        <form role="search" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                            <div class="wp-block-search__inside-wrapper ">
                                <input type="search" class="w-72 " name="s" value="" placeholder="" required="">
                                <button type="submit" class="pl-2 text-white wp-block-search__button wp-element-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="border-2 border-gray-400 bg-primary text-white p-4 mt-4">
                    <h2 class="widget-title font-bold pb-2">Recent posts</h2>
                    <div class="pt-footer-recent-post">
                    <div class="pt-footer-recent-post-media">
                    <a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">
                    <img src="https://blog.prydwen.gg/wp-content/uploads/2024/06/blog23-100x100.jpg" alt=""></a>
                    </div>
                    <div class="pt-footer-recent-post-info">
                    <h6><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Honkai: Star Rail 2.3 reveal stream summary!</a></h6>
                    <a href="https://blog.prydwen.gg/2024/06/07/" class="pt-post-date">
                    <i class="far fa-calendar-alt"></i>Jun <span>07</span>, 2024 </a>
                    </div>
                    
                    </div>
                    <div class="pt-footer-recent-post">
                        <div class="pt-footer-recent-post-media">
                        <a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">
                        <img src="https://blog.prydwen.gg/wp-content/uploads/2024/06/blog23-100x100.jpg" alt=""></a>
                        </div>
                        <div class="pt-footer-recent-post-info">
                        <h6><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Honkai: Star Rail 2.3 reveal stream summary!</a></h6>
                        <a href="https://blog.prydwen.gg/2024/06/07/" class="pt-post-date">
                        <i class="far fa-calendar-alt"></i>Jun <span>07</span>, 2024 </a>
                        </div>
                        
                        </div>

                        <div class="pt-footer-recent-post">
                            <div class="pt-footer-recent-post-media">
                            <a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">
                            <img src="https://blog.prydwen.gg/wp-content/uploads/2024/06/blog23-100x100.jpg" alt=""></a>
                            </div>
                            <div class="pt-footer-recent-post-info">
                            <h6><a href="https://blog.prydwen.gg/2024/06/07/honkai-star-rail-2-3-reveal-stream-summary/">Honkai: Star Rail 2.3 reveal stream summary!</a></h6>
                            <a href="https://blog.prydwen.gg/2024/06/07/" class="pt-post-date">
                            <i class="far fa-calendar-alt"></i>Jun <span>07</span>, 2024 </a>
                            </div>
                            
                            </div>
                    </aside>
                </div>
            </div>
        </div>
        {{-- artikel end --}}

            {{-- card  start   --}}
           
        {{-- card end --}}
        {{-- content End --}}
        </div>
    </div>
        {{-- footer start --}}
        <div class="mt-28 sticky">
            @include('partials.footer')
            
        </div>
        {{-- footer end --}}

    </div>

</body>

</html>
