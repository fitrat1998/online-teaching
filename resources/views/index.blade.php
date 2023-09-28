<x-layouts.main>
<x-navbar></x-navbar>
<x-carousel></x-carousel>

     <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">

            <div class="row g-5">
                <div class="separator"><h1 class=" text-primary text-uppercase mb-2">About</h1></div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('myassets/img/about-1.jpg')}}" alt="" style="object-fit: cover;">
                        <!-- <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;"> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                                <button class="btn btn-primary py-3 px-5 float-end " onclick="myFunction()" id="myBtn">Read More</button>
                        <div class="row g-4 float-right">
                            <div class="col-sm-12 ">
                            </div>
                            <!-- <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+012 345 6789</span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
                <div class="separator"><h1 class=" text-primary text-uppercase mb-2">News</h1></div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            </div>
            <div class="row g-0 team-items">

                @foreach($news as $item)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                            <h5 class="mt-2">{{ $item->title }}</h5>
                            <span>{{ $item->created_at }}</span><hr />
                            <p>{{ $item->short_content }}</p>
                            <a href="{{ route('news.show',$item->id) }}" type="button" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-2.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                             <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-3.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                            <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-4.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                             <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                            <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-2.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                             <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-3.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                            <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('myassets/img/team-4.jpg')}}" alt="">
                        </div>
                        <div class="bg-light text-center p-1">
                             <h5 class="mt-2">YANGI KONSTITUTSIYA – INSON HUQUQLARINING KAFOLATI SIFATIDA</h5>
                            <span>Apr 26, 2023</span><hr />
                            <p>Bizga maʼlumki, Oʻzbekistonda Konstitutsiyani oʻzgartirish boʻyicha xalq saylovi – referendum esa 30 aprelga belgilandi. Аsosiy qonunimizga kiritilayotgan oʻzgartirishlar haqida soʻz y...</p>
                            <button type="button" class="btn btn-success">Read more</button>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- Team End -->

</x-layouts.main>