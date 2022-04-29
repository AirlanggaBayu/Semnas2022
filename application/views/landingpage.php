    <section id="intro" class="clearfix bg-dark mb-5">
    <div class="container-fluid">
        <div class="row">
            <div id="carousel-intro" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?=base_url('/assets/gambar/HeaderWebCAAS.png');?>"  class="img-fluid" alt=" ">
                        <div class="container caption-content">
                            <div class="row">
                                <div class="col-lg-7 intro-info animated fadeInUp">
                                    <h2 style="text-shadow: 5px 5px #000000;" class="mt-6-mb-3 text-name">5th ICoFA 2022</h2>
                                    <h3 class="muted mb-4 font-italic text-theme">Dalam Pengembangan Mazseh </h3>
                                    
                                </div>
                                <div class="col-lg-5 intro-img animated fadeInRight">
                                    <img src="<?= base_url('/assets/gambar/logocaas.png');?>" alt=" " width="370px" class="img-fluid">
                                </div>
                            </div>  
                        </div>
                    </div>
                                    </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-intro" data-slide-to="0" class="active"></li>
                                    </ol>
            </div>
        </div>
    </div>
</section>

<main id="main">
<section id="about" class="pt-3 pb-0">
        <div class="container">

            <header class="section-header">
                <h3>Introduction</h3>
            </header>
            <div class="row about-extra pt-3">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2 text-center" style="position: relative">
                    <img src="<?= base_url('/assets/gambar/chairman2022.png');?>" class="mt-5" alt="" width="500" height="700">
			        <div class="text-white justify-content-center border rounded p-3 bg-success" 
                    style="position: absolute; bottom:10px; left: 0px; text-shadow: 2px 2px #000000;">
                        <h5 class="font-weight-bold m-0">Ini Nama Chairman</h5>
<p class="m-0">Chairman of Organizing Committee</p>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4></h4>
                    <p>Department of Animal Husbandry  (Politeknik Negeri Jember, Indonesia) will be holding an online scientific conference entitled The 3rd National Conference Of Applied Animal Science (CAAS). A theme of the 3rd CAAS is "Challenges Livestock Industry through the Application of Green Economy to Recognize Sustainable Food Independence  in the Era of Society 5.0."</p>
<p>The conference will discuss several topics, including:</p>
<ol style="list-style-type: number;" class="ml-5">
<li>Livestock Production</li>
<li>Animal Health</li>
<li>Animal Nutrition</li>
<li>Feed Technology</li>
<li>Livestock Technology</li>
<li>Livestock Industry</li>
<li>Socio-economy of Livestock</li>
<li>Livestock Agribustiness</li>
</ul>
</br></br>
                </div>
                
            </div>

                            
            
        </div>
    </section>

    <section id="timer" class="wow fadeIn py-5">
        <div class="container">
            <header class="section-header">
                <h3 class="text-black">Conference Date</h3>
                <p class="pb-3 text-dark">The date of the conference is <strong>27 - 28 August 2022</strong>, via <strong>Zoom online</strong>. The program of conference will be started at 09.00 (GMT+7).</p>
            </header>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 text-center pb-5"><img src="https://conference.polije.ac.id/icofa/2021/public/img/zoom.svg" alt=" " height="50px"></div>
                <!-- <a class="btn btn-get-started bg-light font-weight-bold" href="https://us06web.zoom.us/j/81017369538?pwd=WVducVN3dDFsSVVyOWhEWStDMjZXZz09" target="_blank" data-aos="fade-up">
                    <div class="d-flex">
                        <img src="https://conference.polije.ac.id/icofa/2021/public/img/zoom.svg" height="50">
                        <h5 class="text-dark mt-2 pt-2"><strong>&nbsp;&nbsp;Join To 4th ICoFA 2021 Hall / Plenary</strong></h5>
                    </div>
                </a> -->
            </div>
            <div class="row">
                <div class="col-lg-9 offset-lg-2">
                    <div class="container">
                        <div id="countdown" class="row justify-content-center align-items-center">
                        <div class="col-xs-6 col-sm-3  rotateIn"><h5>Days</h5></div>
                        <div class="col-xs-6 col-sm-3  rotateIn"><h5>Hours</h5></div>
                        <div class="col-xs-6 col-sm-3  rotateIn"><h5>Minutes</h5></div>
                        <div class="col-xs-6 col-sm-3  rotateIn"><h5>Seconds</h5></div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
    </section>

	<section id="schedule" class="py-5">
        <div class="container">
            <header class="section-header">
                <h3>Important Dates</h3>
            </header>
            <div class="container max-width-lg cd-timeline__container">
                <?php foreach ($jadwal as $index => $jadwal) {?>
                                <div class="cd-timeline__block mb-3">
                    <div class="cd-timeline__img bg-info">
                    <i class="bi bi-file-earmark-check fa-2x"></i>
                    </div>
                    <div class="cd-timeline__content text-component py-4">
                        <h4 ><a href="#" class="text-black"><?= $jadwal->deskripsi?></a></h4>
                        <p class="text-black small"></p>
                        <div class="flex justify-between items-center">
                            <span class="cd-timeline__date font-weight-bold"><?= date('F d, Y', strtotime($jadwal->tanggal))?> - <?php if ($jadwal->end_date != '0000-00-00') { echo date('F d, Y', strtotime($jadwal->end_date));}?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
                            </div>
        </div>
    </section>
	<section id="callforpaper" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Call for Paper</h3>
                
            </header>

            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-book"></i></div>
                        <h4 class="title"><a href="#" target="_self">Book of Abstract</a></h4>
                        <p class="description">Please do not be hesitate to download the digital version Book Of Abstract.</p>
                    </div>
                </div>    
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-file-earmark-image"></i></div>
                        <h4 class="title"><a href="poster-guideline" target="_self">Poster Guideline</a></h4>
                        <p class="description">Please make sure the poster you bring or send to ICoFA fulfills the following criteria</p>
                    </div>
                </div>    
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-mic-fill"></i></div>
                        <h4 class="title"><a href="presentation-schedule" target="_self">Presentation Schedule</a></h4>
                        <p class="description">Schedule of Presentation during event ICoFA 2021</p>
                    </div>
                </div>    
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-calendar-day"></i></div>
                        <h4 class="title"><a href="program-schedule" target="_self">Program Schedule</a></h4>
                        <p class="description">Schedule of Program during event ICoFA 2021</p>
                    </div>
                </div>    
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-award"></i></div>
                        <h4 class="title"><a href="awards" target="_self">Awards</a></h4>
                        <p class="description">List of Awards given during the ICoFA 2021 event</p>
                    </div>
                </div>    
                                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="bi bi-info-circle"></i></div>
                        <h4 class="title"><a href="https://easychair.org/conferences/?conf=icofa2021" target="_self">Submission System</a></h4>
                        <p class="description">Information about Submission System</p>
                    </div>
                </div>    
                            </div>

        </div>
    </section>

	<section id="speaker" class="bg-white py-5">
        <div class="container">
            
            <div class="section-header">
                <h3> Speakers</h3>
                <p class="pb-1">&nbsp;</p>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($pembicara as $index => $pembicara) {?>
                                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member text-center">
                        <img src="<?=base_url('/assets/gambar/').$pembicara->gambar_pembicara?>" class="img-fluid speaker mb-3" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h6 class="font-weight-bold"><a href="" target="_blank" class="text-success"><?= $pembicara->nama_pembicara?></a></h6>
                                <p class="small"><?= $pembicara->keterangan?></p>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>  
                </div>    
                            </div>
        </div>
    </section>

	<section id="links" class="section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header">
                        <h3>Hosted By</h3>
                    </div>
                    <div class="row no-gutters clearfix wow fadeInUp mb-3 justify-content-center">
                            
                        <div class="col-lg-6">
                            <div class="links-logo links-logo-single">
                                <a href="http://en.polije.ac.id/" target="_blank">
                                    <img src="https://conference.polije.ac.id/icofa/2021/public/img/logo/polije-logo-gabung.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                                            </div>
                </div>
            </div>
            

            

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header">
                        <h3>Published By</h3>
                        <p class="pb-3">IOP Conference Series: Earth and Environmental Science (ESS)</p>
                    </div>
                    <div class="row no-gutters clearfix wow fadeInUp mb-3 justify-content-center">
                            
                        <div class="col-lg-6">
                            <div class="links-logo links-logo-single">
                                <a href="https://ioppublishing.org/" target="_blank">
                                    <img src="<?=base_url('/assets/gambar/Logo_JIPT_New.png');?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                                            </div>
                </div>
            </div>    
            
            
        </div>
    </section>

	<section id="location">
        <div class="container">
            <div class="section-header">
                <h3>Location</h3>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.42966585239!2d113.7203353904191!3d-8.159392138178601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1592483701585!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



