<?php $this->load->view('admin/includes/head-admin'); ?>
<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>34ºc, Sunny </li>
                                        <li><?= date('l, d F, Y');?></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="home"><img src="<?= base_url('assets/img'); ?>/logoku.png" alt="logo"></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block d-flex">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="<?= base_url('home');?>">Home</a></li>
                                            <li><a href="<?= base_url('category');?>">Category</a></li>
                                            <li><a href="<?= base_url('article');?>">Latest News</a></li>
                                            <li><a href="<?= base_url('about');?>">Our Team</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a class="btn btn-primary btn-lg" href="<?= base_url('login');?>">Login</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>