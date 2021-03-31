<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    //
    function index(){
        $a=DB::select('select * from table_nav');
        $b=DB::select('select * from table_nav');
        $padding='0px';
        $title='Beranda';
        $color=DB::select('select * from color');
        $primary=DB::select("select * from color where color='primary'");
        $secondary=DB::select("select * from color where color='secondary'");
        $tertiary=DB::select("select * from color where color='tertiary'");
        $primaryTransparent=DB::select("select * from color where color='primaryTransparent'");
        return view('beranda',compact(['a','b','title',
        'primary',
        'secondary',
        'tertiary',
        'primaryTransparent','padding']));
    }
    function post_list(){
        $a=DB::select('select * from table_nav');
        $b=DB::select('select * from table_nav');
        $post=DB::select("select * from berita where id='11'");
        $date=date_create($post[0]->tanggal);
        $m=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        $tgl=date_format($date,"d");
        $bulan=date_format($date,"m")-1;
        $bln=$m[$bulan];
        $thn=date_format($date,"Y");
        $waktu=$tgl.' '.$bln.' '.$thn;
        $padding='50px';
        $title='';
        $color=DB::select('select * from color');
        $primary=DB::select("select * from color where color='primary'");
        $secondary=DB::select("select * from color where color='secondary'");
        $tertiary=DB::select("select * from color where color='tertiary'");
        $primaryTransparent=DB::select("select * from color where color='primaryTransparent'");
        return view('postlist',compact(['a','b','title','post',
        'primary',
        'secondary',
        'tertiary',
        'primaryTransparent','padding','waktu']));
    }
    function post(){
        $a=DB::select('select * from table_nav');
        $b=DB::select('select * from table_nav');
        $post=DB::select("select * from berita where id='11'");
        $date=date_create($post[0]->tanggal);
        $m=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        $tgl=date_format($date,"d");
        $bulan=date_format($date,"m")-1;
        $bln=$m[$bulan];
        $thn=date_format($date,"Y");
        $waktu=$tgl.' '.$bln.' '.$thn;
        $padding='50px';
        $title='';
        $color=DB::select('select * from color');
        $primary=DB::select("select * from color where color='primary'");
        $secondary=DB::select("select * from color where color='secondary'");
        $tertiary=DB::select("select * from color where color='tertiary'");
        $primaryTransparent=DB::select("select * from color where color='primaryTransparent'");
        return view('posts',compact(['a','b','title','post',
        'primary',
        'secondary',
        'tertiary',
        'primaryTransparent','padding','waktu']));
    }
}
