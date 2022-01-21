@extends('layouts/app')
@section('content')

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
                    <li class="nav-item"><a class="nav-link" href="#services">หน้าเเรก</a></li>

                    <li class="nav-item"><a class="nav-link" href="#portfolio">สินค้าเเนะนำ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ประวัติของกาเเฟ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#map">ติดต่อ</a></li>
                    <li class="nav-item"><a class="nav-link" href="product">สินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">ลงชื่อเข้าใช้</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('{{ asset('img/qwqw.png')}}')"id="services">
        <div class="container">
            <div class="masthead-subheading">ยินดีต้อนรับสู่เว็บไซต์ ณัฐรัฐน์ คาเฟ่</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="services">Nuttharats Café Website
            </a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" >
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ยินดีต้อนรับสู่ร้านณัฐรัฐน์ คาเฟ่</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">

                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"></h4>
                    <p class="text-muted"> กาแฟ เป็นเครื่องดื่มที่ทำจากเมล็ดซึ่งได้จาก ต้นกาแฟ หรือมักเรียกว่า เมล็ดกาแฟ
                        คั่ว มีการปลูกต้นกาแฟในมากกว่า 70 ประเทศทั่วโลก กาแฟเขียว (กาแฟซึ่งยังไม่ผ่านการคั่ว)
                        เป็นหนึ่งในสินค้าทางการเกษตรซึ่งมีการซื้อขายกันมากที่สุดในโลก กาแฟมีส่วนประกอบของคาเฟอีน
                        ทำให้มีสรรพคุณชูกำลังในมนุษย์ ปัจจุบันกาแฟเป็นเครื่องดื่มซึ่งได้รับความนิยมมากที่สุดในโลก</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">

                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">กาแฟ คืออะไร</h4>
                    <p class="text-muted">เป็นที่เชื่อกันว่าสรรพคุณชูกำลังจากเมล็ดของต้นกาแฟนั้นถูกพบเป็นครั้งแรกในเยเมน
                        แถบอาระเบีย และการปลูกต้นกาแฟในสมัยแรกได้แพร่ขยายในโลกอาหรับ
                        หลักฐานบันทึกว่าการดื่มกาแฟได้ปรากฏขึ้นราวกลางคริสต์ศตวรรษที่ 15
                        อันเป็นหลักฐานซึ่งเชื่อถือได้และเก่าแก่ที่สุด ถูกพบในวิหารซูฟี ในเยเมน แถบอาระเบีย จากโลกมุสลิม
                        กาแฟได้แพร่ขยายไปยังทวีปยุโรป อินโดนีเซีย
                        กาแฟได้ถูกส่งผ่านไปยังซิซิลีและอิตาลีในตอนต้นคริสต์ศตวรรษที่ 17 จากนั้นผ่านตุรกีไปยังกรีซ
                        ฮังการี และออสเตรียในตอนปลายคริสต์ศตวรรษที่ 17</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">

                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"></h4>
                    <p class="text-muted"> จากอิตาลีและออสเตรีย กาแฟได้แพร่ขยายไปยังส่วนที่เหลือของทวีปยุโรป
                        กาแฟได้เข้ามามีบทบาทสำคัญในสังคมหลายแห่งตลอดประวัติศาสตร์ ในแอฟริกาและเยเมน
                        มันถูกใช้ร่วมกับพิธีกรรมทางศาสนา ผลที่ตามมาคือ ศาสนจักรเอธิโอเปีย
                        ได้สั่งห้ามการบริโภคกาแฟตลอดกาล จนกระทั่งถึงรัชสมัยของ จักรพรรดิเมเนลิกที่ 2
                        มันยังได้ถูกห้ามในจักรวรรดิออตโตมันระหว่างคริสต์ศตวรรษที่ 17 เนื่องจากสาเหตุทางการเมือง
                        และมีส่วนเกี่ยวพันกับกิจกรรมทางการเมืองหัวรุนแรงในทวีปยุโรป</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">สินค้าเเนะนำ</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div> <div class="row">
            @foreach ($product_introduction as $row)

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

                            <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <div class="text-center">
        <a class="btn btn-primary btn-xl text-uppercase" href="/product">ไปหน้าสินค้า</a>
    </div>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ประวัติของกาเเฟ</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            @foreach ($coffee_history as $row)
            <ul class="timeline">
                <li>
                    <div><img class="rounded-circle img-fluid timeline-image"   src="{{asset('/admin/imgs/'.$row->image)}}"
                            alt="..." /></div>

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">{{$row->name}}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">{{$row->detail}} </p>
                        </div>
                    </div>
                </li>
                @endforeach





                <!-- <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/img/about/6.jpg')}}"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">ประวัติความเป็นมาของกาแฟในโลก</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">มีการเลี้ยงแพะชาวอาราเบียคนหนึ่งชื่อ คาลดี (Kaldi)
                                นำแพะออกไปเลี้ยงตามปกติ แพะได้กินผลไม้สีแดงชนิดหนึ่งเข้าไปแล้วเกิดความคึกคะนองผิดปกติ
                                จึงได้นำเรื่องไปเล่าให้ชาวมุสลิมท่านหนึ่งฟัง
                                จึงได้นำผลของต้นไม้นั้นมากะเทาะเปลือกเอาเมล็ดไปคั่วแล้วต้มในน้ำร้อนดื่มเห็นว่ามีความกระปรี้กระเปร่าจึงนำไปเล่าให้คนอื่นฟังต่อไป
                                ชาวอาราเบียจึงได้เริ่มรู้จักต้นกาแฟมากขึ้น
                                จึงทำให้กาแฟแพร่หลายเพิ่มขึ้นจากประเทศอาราเบีย เข้าสู่ประเทศอิตาลี เนเธอร์แลนด์ เยอรมัน
                            </p>
                        </div>
                    </div>
                </li> -->


                <!-- <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/img/about/5.jpg')}}"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">ประวัติความเป็นมาของกาแฟในโลก</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> ฝรั่งเศสชาวอาระเบียเรียกพืชนี้ว่า “คะวาฮ์” (Kawah) หรือ “คะเวฮ์”
                                (Kaweh) ซึ่งแปลว่าพลัง (strength) หรือความกระปรี้กระเปร่า (vigor) ชาวตุรกีเรียกว่า
                                “คะเวฮ์” (Kaveh) ต่อมาการเรียกชื่อกาแฟจึงเปลี่ยนแปลงไปตามแหล่งต่างๆของโลก เช่น คัฟฟี
                                (Koffee) ในอังกฤษเรียกว่า “คอฟฟี” (coffee) อันเป็นชื่อที่รู้จักและใช้ในปัจจุบันนี้
                                เมื่อมาถึงประเทศไทยคนไทยเรียกว่า โกปี๊ ข้าวแฝ่ และกาแฟในที่สุด</p>
                        </div>
                    </div>
                </li> -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/img/team/12.jpg')}}" alt="..." />
                        <h4>วุฒินันท์ บุญวิไลวงศ์</h4>
                        <p class="text-muted">Front-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{asset('/img/team/21.jpg')}}" alt="..." />
                        <h4>นาย สรวิชญ์ ต่ายแต้มทอง </h4>
                        <p class="text-muted">tester</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{asset('/img/team/20.jpg')}}" alt="..." />
                        <h4>นาย ธนกฤต เขมาภิรักษ์</h4>
                        <p class="text-muted">Back-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Clients-->

    <!-- Contact-->

    <!-- map-->
    @foreach ($address as $row)
    <section class="page-section" id="map">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ติดต่อ</h2>
                <h3 class="section-subheading text-muted"></h3>
                <iframe
                    src="{{asset('/admin/imgs/'.$row->image)}}"
                    width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

                    <h4></h4>
                    <h4 class="subheading">{{$row->name}}</h4>
                </div>
                <div class="timeline-body">
                    <p class="text-muted"></p>
                </div>
        </div>
        @endforeach
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

@endsection
