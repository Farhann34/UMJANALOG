<?php
// Memeriksa apakah parameter 'sec' ada dalam URL
if (isset($_GET['sec'])) {
    $sec = $_GET['sec'];

    // Proses nilai 'sec' sesuai kebutuhan
    switch ($sec) {
        case 1:
            ?>
            <style>
                .kunjugan{
                margin-bottom: 25px;
                flex-direction: column;
                text-align: center;
                /* max-width: 1500px; */
                margin:0 auto;
                padding: 100px 0;
                margin-bottom: 25px;
                
                }
                .image-kunjungan{
                    padding-right: 10px;
                    padding-left: 10px;
                    height: 515px;
                    /* height: 500px; */
                }
                .sub-image-kunjung{
                    padding-bottom: 20px;
                    padding-left: 11px;
                    padding-right: 11px;
                }
                .zoom-custom{
                    transition: transform 0.2s ease;
                }
                .zoom-custom:hover{
                    transform: scale(1.05);
                    transition: transform 0.2s ease;
                }
                .zoom-img{
                    transition: transform 0.2s ease;
                    cursor: pointer;
                }
                .zoom-img:hover{
                    transform: scale(1.05);
                    transition: transform 0.2s ease;
                }
                .image-hunting{
                    flex: 0 0 25%;
                    max-width: 30%;
                    padding-left: 11px;
                    padding-right: 11px;
                }
                .nav-tabs .nav-item {
                    margin-right: 20px;
                    /* padding: 10px; */
                    width: 175px;
                    height: 40px;
                    text-align: center;
                    font-size: 18px;
                    background: aliceblue;
                }
                .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
                    background-color: #CFD8DC;
                    font-weight: 600;
                }
            </style>
            <div class="section1" style="padding-top:100px; height: 425vh; padding-bottom: 170px;">
                <div class="kunjungan container">
                    <div class="row">
                        <div class="col-12" style="height: 195vh;">
                            <h2 style="text-align: center; font-size: 29px; margin-bottom: 25px; border-bottom: 2px solid; padding-bottom: 15px">Dokumentasi Kegaliban</h2>
                            <!-- <p>Ini adalah konten untuk Section 1. Berikut adalah gambar untuk Section 1:</p> -->
                            <div class="row d-flex justify-content-center">
                                <div class="col-3 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/kegaliban/IMG_9090.jpg" data-toggle="modal" data-target="#mydokukegaliban1" alt="Doku-kegaliban1">
                                </div>
                                <div class="col-3 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/kegaliban/IMG_9091.jpg" data-toggle="modal" data-target="#mydokukegaliban2" alt="Doku-kegaliban2">
                                </div>
                                <div class="col-3 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/kegaliban/IMG_9092.jpg" data-toggle="modal" data-target="#mydokukegaliban3" alt="Doku-kegaliban3">
                                </div>
                                <div class="col-3 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/kegaliban/IMG_9093.jpg" data-toggle="modal" data-target="#mydokukegaliban4" alt="Doku-kegaliban4">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 25px">
                                <div class="col-4 image-kunjungan">
                                    <img class="zoom-img" style="height: 140%" src="gambar/dokumentasi/kegaliban/para pameris.png" data-toggle="modal" data-target="#mydokukegaliban5" alt="Kunjungan">
                                </div>
                                <div class="col-8 image-kunjungan">
                                    <div class="row">
                                    <div class="col-12 sub-image-kunjung" style="height: 260px;">
                                        <img class="zoom-img" style="width: 100%;" src="gambar/dokumentasi/kegaliban/IMG_2321.JPG" data-toggle="modal" data-target="#mydokukegaliban6" alt="Kunjungan">
                                    </div>
                                    <div class="col-6 sub-image-kunjung" style="height: 240px;">
                                        <img class="zoom-img" src="gambar/dokumentasi/kegaliban/P10402051.JPG" data-toggle="modal" data-target="#mydokukegaliban7" alt="Kunjungan">
                                    </div>
                                    <div class="col-6 sub-image-kunjung" style="height: 240px;">
                                        <img class="zoom-img" src="gambar/dokumentasi/kegaliban/P10402581.JPG" data-toggle="modal" data-target="#mydokukegaliban8" alt="Kunjungan">
                                    </div>
                                    <div class="col-6 sub-image-kunjung" style="height: 240px;">
                                        <img class="zoom-img" src="gambar/dokumentasi/kegaliban/P10404461.JPG" data-toggle="modal" data-target="#mydokukegaliban9" alt="Kunjungan">
                                    </div>
                                    <div class="col-6 sub-image-kunjung" style="height: 240px;">
                                        <img class="zoom-img" src="gambar/dokumentasi/kegaliban/P10404761.JPG" data-toggle="modal" data-target="#mydokukegaliban10" alt="Kunjungan">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal fade" id="mydokukegaliban1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/IMG_9090.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban2">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/IMG_9091.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban3">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/IMG_9092.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban4">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/IMG_9093.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban5">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/para pameris.png" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban6">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/IMG_2321.JPG" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban7">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/asli/P1040205.JPG" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban8">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/asli/P1040258.JPG" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban9">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/asli/P1040446.JPG" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokukegaliban10">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI KEGALIBAN”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/kegaliban/asli/P1040476.JPG" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 shadow" style="padding-bottom: 50px; border-radius: 20px;">
                            <div class="row" style="margin-top: 35px; justify-content: center;">
                                <div class="">
                                <p style="font-size: 22px; font-weight: 500; margin-bottom: 25px">3 Karya Terbaik Dari Hasil Vote Visitors di Pameran Kegaliban</p>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Himas Alhani</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rifandi</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tasya Utami</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 90%;" src="gambar/dokumentasi/kegaliban/terbaik/himas.jpg" alt="Kunjungan">
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 90%;" src="gambar/dokumentasi/kegaliban/terbaik/rifandi.jpg" alt="Kunjungan">
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 90%;" src="gambar/dokumentasi/kegaliban/terbaik/tarisya.jpg" alt="Kunjungan">
                                        </div>
                                    </div>
                                </div>    
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php
            break;
        case 2:
            ?>
            <style>
                .nav-tabs .nav-item {
                    margin-right: 20px;
                    /* padding: 10px; */
                    width: 175px;
                    height: 40px;
                    text-align: center;
                    font-size: 18px;
                    background: aliceblue;
                }
                .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
                    background-color: #CFD8DC;
                    font-weight: 600;
                }
            </style>
            <div class="section2" style="padding-top:100px; height: 230vh; padding-bottom: 170px;">
                <div class="kunjungan container">
                    <div class="row">
                        <div class="col-12" style="height: 80vh;">
                            <h2 style="text-align: center; font-size: 29px; margin-bottom: 25px; border-bottom: 2px solid; padding-bottom: 15px">Dokumentasi Atindriya</h2>
                            <!-- <p>Ini adalah konten untuk Section 1. Berikut adalah gambar untuk Section 1:</p> -->
                            <div class="row d-flex justify-content-center">
                                <div class="col-4 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/atindriya/atindri1.jpg" data-toggle="modal" data-target="#mydokuatindriya1" alt="Doku-atindriya1" style="cursor: pointer;">
                                </div>
                                <div class="col-4 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/atindriya/atindri2.jpg" data-toggle="modal" data-target="#mydokuatindriya2" alt="Doku-atindriya2" style="cursor: pointer;">
                                </div>
                                <div class="col-4 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/atindriya/atindri3.jpg" data-toggle="modal" data-target="#mydokuatindriya3" alt="Doku-atindriya3" style="cursor: pointer;">
                                </div>
                                <!-- <div class="col-3 image-hunting">
                                    <img class="zoom-img" src="gambar/dokumentasi/kegaliban/IMG_9093.jpg" data-toggle="modal" data-target="#mydokukegaliban4" alt="Doku-kegaliban4">
                                </div> -->
                            </div>
                            <div class="modal fade" id="mydokuatindriya1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI ATINDRIYA”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/atindriya/atindri1.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokuatindriya2">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI ATINDRIYA”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/atindriya/atindri2.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="mydokuatindriya3">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">“DOKUMENTASI ATINDRIYA”</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="gambar/dokumentasi/atindriya/atindri3.jpg" alt="Poster">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 shadow" style="padding-bottom: 50px; border-radius: 20px;">
                            <div class="row" style="margin-top: 35px; justify-content: center;">
                                <div class="">
                                    <p style="font-size: 22px; font-weight: 500; margin-bottom: 25px">3 Karya Terbaik Dari Hasil Vote Visitors di Pameran Atindriya</p>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Shela Amalia</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tarisya utami</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Rahil Aqilah</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/1shela.jpg" alt="Kunjungan">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/1shelaa.jpg" alt="Kunjungan">
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/2tarisya.jpg" alt="Kunjungan">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/2tarisyaa.jpg" alt="Kunjungan">
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="text-align: center; padding-top: 30px;">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/3rahil.jpg" alt="Kunjungan">
                                            <img class="zoom-custom" style="width: 40%;" src="gambar/dokumentasi/atindriya/terbaik/3rahill.jpg" alt="Kunjungan">
                                        </div>
                                    </div>
                                </div>    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        case 3:
            ?>
            <div class="section3" style="padding-top:100px; height: 100vh;">
            <h2 style="text-align: center; font-size: 29px; margin-bottom: 25px; border-bottom: 2px solid; padding-bottom: 15px">Dokumentasi Kunjungan</h2>
                            <!-- <p>Ini adalah konten untuk Section 1. Berikut adalah gambar untuk Section 1:</p> -->
                           
                <div class="row" style="margin-top: 50px">
          <div class="col-4 image-kunjungan">
            <img class="zoom-img" src="gambar/kunjungan/49e25528-be40-40fa-bb4f-f5f1aaf85ff9.JPG" data-toggle="modal" data-target="#mykunjungan1" alt="Kunjungan">
          </div>
          <div class="col-4 image-kunjungan">
            <img class="zoom-img" src="gambar/kunjungan/DSCF2710.JPG" data-toggle="modal" data-target="#mykunjungan2" alt="Kunjungan">
          </div>
          <div class="col-4 image-kunjungan">
            <div class="row">
              <div class="col-12 sub-image-kunjung">
                <img class="zoom-img" src="gambar/kunjungan/DSCF2694.JPG" data-toggle="modal" data-target="#mykunjungan3" alt="Kunjungan">
              </div>
              <div class="col-12 sub-image-kunjung">
                <img class="zoom-img" src="gambar/kunjungan/DSCF2727.JPG" data-toggle="modal" data-target="#mykunjungan4" alt="Kunjungan">
              </div>
            </div>
          </div>
            </div>
            
            <?php
            break;
        case 4:
            ?>
            <div class="section4" style="padding-top:100px; height: 100vh;">
            <h2 style="text-align: center; font-size: 29px; margin-bottom: 25px; border-bottom: 2px solid; padding-bottom: 15px">Dokumentasi Sharing Session</h2>
                            <!-- <p>Ini adalah konten untuk Section 1. Berikut adalah gambar untuk Section 1:</p> -->
                            <div class="col-12 bg-camera1 cam" style="margin-top: 100px;">
                           
            <div class="row sharing-flex1">
    <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0341.JPG" data-toggle="modal" data-target="#mysharing1" alt="Sharing">
  </div>
  <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0331.JPG" data-toggle="modal" data-target="#mysharing2" alt="Sharing">
  </div>
  <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0629.JPG" data-toggle="modal" data-target="#mysharing3" alt="Sharing">
  </div>
</div>
</div>
<div class="col-12 bg-camera2 cam">
<div class="row sharing-flex2">
  <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0624.JPG" data-toggle="modal" data-target="#mysharing4" alt="Sharing">
  </div>
  <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0620.JPG" data-toggle="modal" data-target="#mysharing5" alt="Sharing">
  </div>
  <div class="col-3 image-sharing">
    <img class="share" src="gambar/sharing/DSC_0647.JPG" data-toggle="modal" data-target="#mysharing6" alt="Sharing">
  </div>
</div>
</div>
          </div>
            </div>
            <?php
            break;
        case 5:
            ?>

            <div class="section5" style="padding-top:100px; height: 100vh;">
            <h2 style="text-align: center; font-size: 29px; margin-bottom: 25px; border-bottom: 2px solid; padding-bottom: 15px">Dokumentasi Hunting Session</h2>
                            <!-- <p>Ini adalah konten untuk Section 1. Berikut adalah gambar untuk Section 1:</p> -->
                            <div class="col-12 cam">
                            <div class="row d-flex justify-content-center">
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0501.JPG" data-toggle="modal" data-target="#myhunting1" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0560.JPG" data-toggle="modal" data-target="#myhunting2" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0585.JPG" data-toggle="modal" data-target="#myhunting3" alt="Hunting">
            </div>
            
            
          </div>
        </div>
       
          <div class="row d-flex justify-content-center">
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF5077.JPG" data-toggle="modal" data-target="#myhunting4" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF5326.JPG" data-toggle="modal" data-target="#myhunting5" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF51371.JPG" data-toggle="modal" data-target="#myhunting6" alt="Hunting">
            </div>
            </div>
        </div>
            <?php
            break;
        default:
            ?>
            <div>
                <h2>Section tidak ditemukan!</h2>
            </div>
            <?php
    }
} else {
    ?>
    <div>
        <h2>Parameter 'sec' tidak ditemukan!</h2>
    </div>
    <?php
}
?>

