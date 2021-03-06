@extends('public.layout.app', ['title' => 'Profil Desa'])

@section('meta')
  <meta name="description" content="Profil Desa" />
  <meta name="keywords" content="Profil Desa" />
  <meta property="og:title" content="Profil Desa"/>
  <meta property="og:type" content="Profil Desa"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Profil Desa</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="">
                <h1 class="heading__title">Profil Desa Serangpanjang</h1>
                    <p style="text-align: left; font-size: 20px">
                      <span style="text-align:center;font-weight:bold;"><h4>- Belum ada data -</h4></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection