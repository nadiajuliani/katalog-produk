@extends('layouts.frontend')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('frontend/images/g2gpanjang.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Tentang
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Cerita Kita
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Glad2Glow adalah merek skincare yang muncul di pasar Indonesia pada tahun
                            2022, dikenal dengan produk seperti Blueberry Moisturizer dan Light Sunscreen.
                            Merek ini mendapatkan popularitas karena produknya yang diformulasikan dengan
                            bahan aktif dan alami, serta telah terdaftar di BPOM RI dan bersertifikasi halal.
                            Glad2Glow juga dikenal karena penjualannya yang fokus pada platform online
                            seperti Shopee dan Tokopedia.
                        </p>
                        <p class="stext-113 cl6 p-b-26">
                            Produk Glad2Glow diformulasikan dengan bahan aktif dan alami, serta terdaftar di BPOM RI dan
                            bersertifikasi halal.
                            Beautyhaul menyarankan beberapa produk Glad2Glow seperti Ultra Light Sunscreen Gel UV SPF50
                            PA+++, Blueberry 5% Ceramide Barrier Repair Moisturizer, Centella 2% Salicylic Acid Overnight
                            Acne Spot Treatment, dan Real Mugwort Salicylic Acid Acne Control Clay Mask.
                            PT Suntone Wisdom Indonesia merupakan pemilik dan pengelola brand Glad2Glow.
                            Produk Glad2Glow dapat ditemukan di berbagai toko online, termasuk Lazada, Blibli, dan berbagai
                            marketplace lainnya.
                            Glad2Glow menyediakan berbagai produk skincare, termasuk moisturizer, sunscreen, acne treatment,
                            dan clay mask.
                            Produk Glad2Glow dirancang untuk berbagai jenis kulit, termasuk kulit normal, kering, dan
                            berminyak.
                            Glad2Glow telah berhasil menarik perhatian banyak orang, terutama melalui media sosial seperti
                            TikTok, dan menjadi merek skincare yang populer di Indonesia.
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset('frontend/images/about-01.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Misi Kita
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Misi utama Glad2Glow adalah membantu setiap individu, terutama pemula, 
                            untuk mencapai kulit sehat dan glowing yang mereka impikan. Mereka menawarkan 
                            solusi perawatan kulit yang inovatif dengan memadukan
                            teknologi canggih dengan bahan alami, lembut, dan terjangkau. 
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Glad2Glow berkomitmen untuk membantu para pemula untuk mendapatkan kulit 
                                yang sehat seperti yang mereka impikan, merayakan kecantikan alami dengan 
                                solusi perawatan kulit yang inovatif, dengan memadukan teknologi
                                canggih dengan bahan-bahan alami dan lembut, sertaharga yang terjangkau.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ asset('frontend/images/about-02.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->

    <!-- EndFooter -->
@endsection
