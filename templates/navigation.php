   <div class="nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="#">
                    <img src="photo/head/pic-logo-innovation-technology-en.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div >

                     <ul class="nav navbar-nav social-nav">
                        <li> <a href="/energySolution?language=th" class="language-link 
                            <?=($_GET['language']=='th')? 'link-active': '';?>">TH</a></li>
                        <li><a href="" class="language-link"> | </a>  </li>
                        <li><a href="/energySolution?language=en" class="language-link 
                            <?=($_GET['language']=='en')? 'link-active': '';?>">EN</a></li>
                         <li>
                            <a href="#"><img src="photo/head/icon-social-facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="photo/head/icon-social-google-plus.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="photo/head/icon-social-twitter.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="photo/head/icon-social-youtube.png" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="clear">
                    <ul class="nav navbar-nav">
                        <?php foreach ($contents['menu'] as $key => $menu) :?>
                            <li>
                                <a href="#<?=$menu['name']?>-page"  class="page-scroll"><?=$menu['detail']?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>