@extends('main')

@section('title', 'Biodata diri')

@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Biodata diri</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fas fa-home"></i>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="content mt-3">
            <figure class="figure">
                <img width="200" height="200" src="{{ asset('style/images/mila.jpg') }}" class="img-thumbnail" alt="Hallo">

                <blockquote class="blockquote">
                    <p>Biodata diri saya :</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Nama Lengkap : KHUSNIATUL MILA
                </figcaption>
                <figcaption class="blockquote-footer">
                    Nama Panggilan : MILA
                </figcaption>
                <figcaption class="blockquote-footer">
                    Tempat & Tanggal Lahir : Pasuruan, 09 Januari 2004
                </figcaption>
                <figcaption class="blockquote-footer">
                    Tinggi Badan : 155 cm
                </figcaption>
                <figcaption class="blockquote-footer">
                    Berat Badan : 40 Kg
                </figcaption>
                <figcaption class="blockquote-footer">
                    Hobby : Rebahan dan Nonton Film
                </figcaption>
            </figure>
    </div>
@endsection