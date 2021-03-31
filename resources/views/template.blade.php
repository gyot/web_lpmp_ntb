<!doctype html>
<html lang="en">

<head>
    @yield('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <style>
        :root {
            --primary: <?=$primary[0]->code; ?> ;
            --secondary: #0077ff;
            --tertiary: #0077ff;
            --primaryTransparent: #297cbf83 !important;
        }
    </style>
    
</head>

<body style="padding-top:{{$padding}} !important">
    <!-- Nav tabs -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light fixed-top transparent .primary-color">
            <a class="navbar-brand" href="#" style="color: #fff">
                {{-- <img src="img/logo_top.png" style="border:5px solid white;" alt="" srcset=""> --}}
                <img style="width: 40px;float:left; margin-right:10px" src="{{asset('img/logo_kemdikbud.png')}}" alt="" srcset="">
                <div>
                    <h5 style="margin:0px;padding:0px;font-weight: bold;">LPMP NTB</h5>
                    <p style="margin:0px;padding:0px;font-size: x-small">NUSA TENGGARA BARAT</p>
                </div>
            </a>
            <button class="navbar-toggler" style="color:#fff !important" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @foreach ($a as $nav)
                        @if ($nav->child=='0' && $nav->id_nav=='0')
                        <li class="nav-item active">
                            <a class="nav-link" href="#">{{$nav->nav}} <span class="sr-only">(current)</span></a>
                        </li>
                        @elseif ($nav->child=='1')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$nav->nav}}
                            </a>
                            <div class="dropdown-menu transparent" aria-labelledby="navbarDropdown">
                                @foreach ($b as $sub)
                                @if ($nav->id==$sub->id_nav)
                                    <a class="dropdown-item" href="#">{{$sub->nav}}</a>
                                @endif
                                @endforeach
                                {{-- <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> --}}
                            </div>
                        </li>    
                        @endif
                    @endforeach
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu transparent" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                 <!-- Actual search box -->
                <div class="form-group has-search" style="margin:0px">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
        </nav>
    </div>
    <!-- <div class="content">

    </div> -->
    @yield('slider')
    <div class="row d-flex justify-content-center" style="margin-top:20px">
        <div class="col-lg-11 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <!-- <div class="row d-flex justify-content-end">
                        <div class="col-lg-4 col-sm-8 col-md-6"><img style="width: 100%;" src="img/g49.png" alt="ZI-WBK" srcset=""></div>
                    </div> -->
                <div class="row">
                    <div class="col-lg-9 col-sm-12 box-shadow">
                        <div class="side">
                            @yield('content')
                            <!-- Batas -->
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="side">
                        <!-- Batas -->
                        <table class="table table-light box-shadow">
                            <thead class="thead-light">
                                <tr class="primary-color">
                                    <th><h5>File-file Penting</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" id="bagian-slider2">
                                        <div class="carousel-item active">
                                                <div class="bg-image" style="background-image: url('https://lpmpntb.kemdikbud.go.id/assets/lakip2020.PNG');"></div>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <img class="bg-text d-block w-100" src="https://lpmpntb.kemdikbud.go.id/assets/lakip2020.PNG" alt="First slide">
                                                </a>
                                                <div class="carousel-caption d-none d-md-block">
                                                    <!-- <h3 class="caption-tittle">INI GAMBAR 1</h3> -->
                                                    <p>Ini keterangan gambar 1</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="bg-image" style="background-image: url('https://lpmpntb.kemdikbud.go.id/assets/renstra2020.PNG');"></div>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <img class="bg-text d-block w-100" src="https://lpmpntb.kemdikbud.go.id/assets/renstra2020.PNG" alt="First slide">
                                                </a>
                                                <div class="carousel-caption d-none d-md-block">
                                                    <!-- <h3 class="caption-tittle">INI GAMBAR 1</h3> -->
                                                    <p>Ini keterangan gambar 2</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-light box-shadow">
                            <thead class="thead-light"box-shadow>
                                <tr>
                                    <th><h5>Profil LPMP NTB</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <iframe style="width: 100%" src="https://www.youtube.com/embed/LFyQJJZuL2c?autoplay=0" name="fitvid0"></iframe>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-light box-shadow">
                            <thead class="thead-light"box-shadow>
                                <tr>
                                    <th><h5>Statistik</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <iframe style="width: 100%" src="https://www.youtube.com/embed/LFyQJJZuL2c?autoplay=0" name="fitvid0"></iframe>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-light box-shadow table-hover">
                            <thead class="thead-light"box-shadow>
                                <tr>
                                    <th><h5>Tautan Eksternal</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('https://image-cdn.medkomtek.com/Ca3A0Zi69v8TSaB6gd7NYCMhbfs=/673x379/smart/klikdokter-media-buckets/medias/2307489/original/050475100_1565236643-Air-Rebusan-vs-Air-Minum-Kemasan-Mana-Lebih-Baik-untuk-Si-Kecil-By-Alex-SG-shutterstock.jpg')">
                                        <a style="text-decoration:none;color:#fff" href="#" target="_blank" rel="noopener noreferrer"><p>Link 1</p></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('http://buddhazine.com/wp-content/uploads/2017/11/AK2.jpg')">
                                        <a style="text-decoration:none;color:#fff" href="#" target="_blank" rel="noopener noreferrer"><p>Link 2</p></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('#')">
                                        <a style="text-decoration:none;color:#fff" href="#" target="_blank" rel="noopener noreferrer"><p>Link 3</p></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.099635355953!2d116.08318831423033!3d-8.58641858952827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc07f00fcf73b%3A0xff8fa1f86f385c9d!2sLembaga%20Penjamin%20Mutu%20Pendidikan%20-%20LPMP%20Provinsi%20Nusa%20Tenggara%20Barat!5e0!3m2!1sen!2sid!4v1615552600724!5m2!1sen!2sid" style="border:0; width:100%" allowfullscreen="" loading="lazy"></iframe>
        <h6>Lembaga Penjaminan Mutu Pendidikan Nusa Tenggara Barat (LPMP NTB)</h6>
        <h6>Panji Tilarnegara, No. 08 Mataram</h6>

        <p>© Copyright 2021, All Rights Reserved  |  LPMP NTB</p>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- <input name="pickcolor" id="pickcolor" type=color value=#00ffff>

<input type="range" min="0" max="1" step="0.1">
<input type="text" name="color" id="color">


<div id="kotak" style="width:100px;height:100px;"></div>
<script>
    $(document).ready(function() {

    $("input").change(function() {

    var opacity = $("input[type=range]").val();
    var color = $("input[type=color]").val();

    var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) + ',' + parseInt(color.slice(-4, -2), 16) + ',' + parseInt(color.slice(-2), 16) + ',' + opacity + ')';

    $('#color').val(rgbaCol);
    $('#kotak').css('background-color',rgbaCol);
    })
    })
</script> -->
</body>

</html>