<!DOCTYPE html>
<html lang="cn">
<head>
    @include('template.header')
    <title>顺加移民</title> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mx-auto px-4 lg:px-32 py-4 lg:pb-32">
        
        <div id="intro-gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 md:h-96 overflow-hidden rounded-lg " style="height: 650px;">
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/montreal.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">魁北克</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">技术移民(QSW)、VJO</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">经验类移民PEQ</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">IT试点项目</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/toronto.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">加拿大联邦</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">SUV项目</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">护工试点项目</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">夫妻团聚</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/pei.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">海洋四省</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">AIP项目</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/novascotia_2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">新斯科舍</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">技术类移民移民</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">雇主担保</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/ottawa_2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">安大略</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">雇主担保</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/alberta.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">阿尔伯塔</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">雇主担保</h5>
                    </div>
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-1400 ease-in-out" data-carousel-item>
                    <img src="image/wallpaper/saskatchewan.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    <div class="absolute bottom-20 md:bottom-0 md:mb-6 text-center px-12 md:px-24  ">
                        <h5 class="text-white md:text-8xl text-6xl font-semibold leading-7 mb-8 md:mb-12">萨斯喀彻温</h5>
                        <h5 class="text-white md:text-4xl text-2xl leading-7 md:mb-4">雇主担保</h5>
                    </div>
                </div>

        



            </div>

            

            <div class="flex justify-center items-center pt-4">
                <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        <div id = 'programs-gallery-2' class="py-8">
            <div class="py-8">
                <h1 class = "text-6xl lg:text-8xl">项目介绍</h1>
            </div>
        
            <p class = "text-2xl lg:w-2/5 lg:pb-16">扎根于加拿大的本地服务团队，加拿大移民局备案的机构和持牌移民顾问。了解中国客户的情况与需求，熟悉加拿大政策法规，为客户量身定制最适合的移民方案。 </p>

            <div class="grid md:grid-cols-3 gap-x-8 gap-y-10 place-items-center max-md:justify-center mt-12">
                
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="image/background1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="image/background1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="image/background1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div id = "team"class="font-[sans-serif] text-[#333] py-8">
            <div class=" mx-auto">
                <div class=" mx-auto">
                    <h2 class="md:text-8xl  text-6xl font-semibold pt-32">我们的团队</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-x-8 gap-y-10 max-md:justify-center place-items-center mt-12">
                    <div class="bg-gray-800 p-4 border rounded-md max-w-[300px]">
                        <img src="https://readymadeui.com/team-1.webp" class="w-full object-contain object-top rounded-md" />
                        <div class="text-center mt-4">
                        <h4 class="text-base font-extrabold text-white">CEO</h4>
                        <p class="text-xs mt-1 text-white">Claus Zhang</p>
                    </div>
                </div>

                <div class="bg-gray-800 p-4 border rounded-md max-w-[300px]">
                    <img src="https://readymadeui.com/team-2.webp" class="w-full object-contain object-top rounded-md" />
                    <div class="text-center mt-4">
                        <h4 class="text-base font-extrabold text-white">Web Developer</h4>
                        <p class="text-xs mt-1 text-white">Mark Adair</p>
                    </div>
                </div>

                <div class="bg-gray-800 p-4 border rounded-md max-w-[300px]">
                    <img src="https://readymadeui.com/team-3.webp" class="w-full object-contain object-top rounded-md" />
                    <div class="text-center mt-4">
                        <h4 class="text-base font-extrabold text-white">Web Designer</h4>
                        <p class="text-xs mt-1 text-white">Simon Konecki</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <section id="contact" class="md:pt-24 pb-12 pt-36">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="md:flex gap-x-24 clear-left md:mb-16 mb-10">
                    <div class=" md:mb-0 mb-4">
                        <h2 class="text-black font-manrope text-6xl font-semibold leading-10 mb-20 md:text-left text-center">Get In Touch</h2>
                        <p class="text-gray-600 text-lg font-normal leading-7 mb-7 md:text-left text-center">Whether you have a concern or simply want to say hello, We are here to facilitate communication with you.</p>
                
                    </div>
                    <div class="border-l-2 md:border-indigo-600 border-white px-10 py-6">
                        <div class="mb-8">
                            <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Email Address</h6>
                            <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">pagedone@gmail.com</h3>
                        </div>
                        <div>
                            <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">联系电话</h6>
                            <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">470-601-1911</h3>
                        </div>
                    </div>
                </div>

                <div class="h-full relative flex justify-center">
                    <div class="w-full lg:h-full  absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                    <img src="image/wallpaper/montreal_ring.jpeg" class="w-full  object-cover">
                    <div class="absolute  md:bottom-20  bottom-10 text-center px-6">
                        <h5 class="text-white md:text-4xl text-2xl font-semibold leading-7 lg:mb-2">Canada</h5>
                        <h5 class="text-white md:text-2xl leading-7">Montreal, Quebec</h5>
                        <p class="text-white text-base md:text-2xl font-medium leading-6">11 floor, 1200 Av.McGill College</p>
                    </div>
                </div>
            </div>
        </section>
                                            


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

<footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">Shunjia™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6 px-2">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6 px-2">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6 px-2">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>

</html>