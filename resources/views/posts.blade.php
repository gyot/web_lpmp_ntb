@extends('template')
@section('title')
<title>{{$post[0]->title}}</title>
@endsection
@section('content')

                            <div class="row d-flex justify-content-end card-header ">
                                <div class="col-lg-7 col-sm-8 col-md-6" ><img style="margin:0px;width: 90%;" src="{{asset('img/ziwbk.svg')}}" alt="ZI-WBK" srcset=""></div>
                            </div><br>
                            <center><h4><b>{{$post[0]->title}}</b></h4></center>
                            <br>
                            <center>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <img style="width:100% !important" src="{{asset('img/upload/berita')}}/{{$post[0]->images}}" alt="" srcset="">
                                </div>
                            </center>
                                                <div class="post-info">
                                                                <a href="#" class="author-name " title="Admin LPMP NTB "><span class="fa fa-user " aria-hidden="true "></span> {{$post[0]->writer}}</a>&nbsp;|
                                                                <span class="fa fa-clock-o " aria-hidden="true "></span> <span>{{$waktu}}</span>
                                                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                {!!$post[0]->content!!}
                                </div>
                            </div>
@endsection