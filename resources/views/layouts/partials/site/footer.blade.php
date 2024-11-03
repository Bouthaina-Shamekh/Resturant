
    <!-- Footer -->
    <footer class="mt-10">
        <div class="w-full relative mb-10">
            <img src="{{ asset('siteweb/img/restatant/view-01.png') }}" alt="" class="w-full">
        </div>
        <div class="container mx-auto w-full relative flex justify-around flex-wrap">
            <div>
                <img src="{{ asset('siteweb/img/logoD.png') }}" alt="" width="100px" class="mb-2">
                <p>
                    مطعم الملكي لاطيب الماكولات وجميع الاطباق <br>
                    يمكنك ارسال طلباتك داخل او خارج المطعم بكل سهور
                </p>
            </div>
            <div>
                <ul class="w-full text-surface dark:text-white">
                    <li class="w-full border-b-2 border-neutral-100 py-4 text-black">
                        روابط قد تهمك
                    </li>
                    <li class="w-full border-b-2 border-neutral-100 py-4 hover:text-amber-500 hover:ps-2 transition-all delay-150 ease-in">
                        <a href="#" class="hover:text-amber-500 transition-color duration-200 ease-in">سياية الخصوصية</a>
                    </li>
                    <li class="w-full py-4  hover:text-amber-500 hover:ps-2 transition-all delay-150 ease-in">
                        <a href="#" class="hover:text-amber-500 transition-color duration-200 ease-in">الاحكام والشروط</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-between">
                <a href="#">
                    <img src="{{ asset('siteweb/img/google-play.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('siteweb/img/app-store.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('siteweb/img/call-with-me.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="w-full relative mt-10 bg-amber-400">
            <div class="container mx-auto w-90 flex justify-between items-center py-4">
                <div class="flex items-center text-white gap-4 font-bold text-xl">
                    <a href="#" target="_blank" class="hover:text-sky-500 transition-color duration-200 ease-in">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-sky-950 transition-color duration-200 ease-in">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-red-600 transition-color duration-200 ease-in">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-rose-600 transition-color duration-200 ease-in">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="flex items-center  text-white">
                    <a href="https://palgoals.com" target="_blank" class=" hover:text-sky-500"> Palgoals </a>
                    2024 &copy;
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('siteweb/js/plugins/tw-elements.umd.min.js') }}"></script>
    <script type="module" src="{{ asset('siteweb/js/tailwind.js') }}"></script>
    <script src="{{ asset('siteweb/js/plugins/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('siteweb/js/cart.js') }}"></script>
    <script src="{{ asset('siteweb/js/main.js') }}"></script>



    <!-- for this page -->
    <script src="{{ asset('siteweb/js/plugins/swiper-bundle.min.js') }}"></script>
    <script>

        function colseModal(id) {
            $(`#${id}`).modal('hide');
        }

        $('#categories li').click(function() {
            $('#categories li:gt(6)').hide();
            $('#fullScreen').addClass('hidden');

            $('#categories').removeClass('categories_all');
            $('#categories-container').css({
                'margin-bottom': '0',
            });
            $('#show-more').slideDown();
            $('#show-more-2').hide();
        });

        $('#fullScreen').click(function() {
            $('#categories li:gt(6)').hide();
            $('#fullScreen').addClass('hidden');

            $('#categories').removeClass('categories_all');
            $('#categories-container').css({
                'margin-bottom': '0',
            });
            $('#show-more').slideDown();
            $('#show-more-2').hide();
        });

        // قسم الأصناف من حيث عرض عدد معين
        // إخفاء العناصر التي تتجاوز الـ 6
        $('#categories li:gt(6)').hide();
        $('#show-more-2').hide();


        function showMore() {
            // إظهار 6 عناصر إضافية
            $('#categories li:hidden').slice(0, 6).slideDown();
            $('#show-more-2').slideDown();

            // إضافة كلاس لجميع العناصر
            $('#categories').addClass('categories_all');

            $('#fullScreen').removeClass('hidden');

            $('#categories-container').css({
                'margin-bottom': '158px',
            });
            // إذا كانت هناك عناصر مخفية بعد الإظهار، احتفظ بالزر، وإلا قم بإخفائه
            if ($('#categories li:hidden').length === 0) {
                $('#show-more').hide();
                $('#show-more-2').hide();
            }
        }
    </script>
    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true,
                slidesPerView: 3,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".multiple-slide-carousel .swiper-button-next",
                    prevEl: ".multiple-slide-carousel .swiper-button-prev",
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    800: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    375: {
                        slidesPerView: 1,
                        spaceBetween: 5
                    }

                }
        });
    </script>
</body>

</html>
