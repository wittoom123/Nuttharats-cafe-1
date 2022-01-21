@include('layouts/admin/head')


<body>
  <!-- container section start -->
  <section id="container" class="">


@include('layouts/admin/header')




@include('layouts/admin/sidebar')



    <!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">

                </div>
                <div class="count">{{App\Product::all()->count()}}</div>
              <div class="title">สินค้า</div>
            </div>
            <!--/.info-box-->
          </div>

           <!--/.col-->

           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">{{App\product_introduction::all()->count()}}</div>
              <div class="title">สินค้าเเนะนำ</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-address-book-o"></i>
              <div class="count">{{\app\User::all()->count() }}</div>
              <div class="title">ผู้ใช้งานทั้งหมด</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->





        <!-- Today status end -->







        <!-- statics end -->




        <!-- project team & activity start -->



        <!-- project team & activity end -->


</body>
