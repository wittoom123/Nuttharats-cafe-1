@extends('layouts/app')
@section('content')

<body>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{asset('/img/1.png')}}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/" >Home</a>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">ลงชื่อเข้าใช้</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">สินค้า</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div> <div class="row">
            @foreach ($product as $row)
           
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{asset('/admin/imgs/'.$row->image)}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$row->name}}</div>
                            <div class="portfolio-caption-heading">{{$row->price}}</div>
                           
                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
</body>

@endsection