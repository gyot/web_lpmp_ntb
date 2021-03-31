@extends('template')
@section('title')
<title>{{$title}}</title>
@endsection
@section('slider')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="bagian-slider">
            <div class="carousel-item active">
                <div class="bg-image" style="background-image: url(https://lpmpntb.kemdikbud.go.id/upload/gallery/20210125100031.jpg);"></div>
                <img class="bg-text d-block w-100" src="https://lpmpntb.kemdikbud.go.id/upload/gallery/20210125100031.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="caption-tittle">PENYERAHAN PIAGAM PENGANUGERAHAN ZONA INTEGERITAS WILAYAH BEBAS KORUPSI DI LINGKUNGAN LEMBAGA PENJAMINAN MUTU PENDIDIKAN NUSA TENGGARA BARAT</h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-image" style="background-image: url(https://lpmpntb.kemdikbud.go.id/upload/gallery/20210125100050.jpg);"></div>
                <img class="bg-text d-block w-100" src="https://lpmpntb.kemdikbud.go.id/upload/gallery/20210125100050.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="caption-tittle">INI GAMBAR 2</h3>
                    <p>Ini keterangan gambar 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-image" style="background-image: url(https://lpmpntb.kemdikbud.go.id/upload/gallery/20200622090128.jpg);"></div>
                <img class="bg-text d-block w-100" src="https://lpmpntb.kemdikbud.go.id/upload/gallery/20200622090128.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="caption-tittle">INI GAMBAR 3</h3>
                    <p>Ini keterangan gambar 3</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('content')
                            <div class="row d-flex justify-content-end card-header ">
                                <div class="col-lg-7 col-sm-8 col-md-6" ><img style="margin:0px;width: 90%;" src="{{asset('img/ziwbk.svg')}}" alt="ZI-WBK" srcset=""></div>
                            </div><br>
                            <h5 >Pengumuman</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                        <div class="post-info">
                                            <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                            <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                        </div>
                                        <h5>Judul Postingan</h5>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                        <a href="#">Baca selengkapnya.</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                            <div class="post-info">
                                                <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                                <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                            </div>
                                            <h6>Judul Postingan</h6>
                                            <p class="thumbnail-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                            <a href="#">Baca selengkapnya.</a>
                                        </div>
                                        <div class="col-6">
                                            <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                            <div class="post-info">
                                                <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                                <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                            </div>
                                            <h6>Judul Postingan</h6>
                                            <p class="thumbnail-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                            <a href="#">Baca selengkapnya.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr><br>
                            <h5>Berita Terbaru</h5>
                            <hr>
                            <div class="row">
                                <div class="thumbnail-berita col-md-6">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                                <div class="thumbnail-berita col-md-3">
                                    <img src="https://live.staticflickr.com/4365/37082384235_a643fba80d_b.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                    <div class="post-info">
                                        <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> Admin LPMP NTB</a>&nbsp;|
                                        <span class="fa fa-clock-o " aria-hidden="true "></span> <span>04 February 2021</span>
                                    </div>
                                    <h5>Judul Postingan</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor minima doloremque eius laboriosam corporis? Consequatur minus atque commodi error, deleniti totam quos autem, est, alias vel sequi nostrum. Et, dolorum?</p>
                                    <a href="#">Baca selengkapnya.</a>
                                </div>
                            </div>
@endsection