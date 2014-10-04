<!-- Menu -->
<div class="main-menu-continer">
    <div id="main-menu" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Responsive Navigation -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button> <!-- /.navbar-toggle -->
                <!-- Logo -->
                <a class="navbar-brand" href="index-2.html">
                    <span>Top</span>Class
                </a><!-- /.navbar-brand -->
            </div> <!-- /.navbar-header -->

            <nav class="collapse navbar-collapse" role="navigation">
                <!-- Main navigation -->
                <ul id="headernavigation" class="nav navbar-nav pull-right">
                    <li class="<?=get_active_tab('index')?>"><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#we-do">Service</a></li>
                    <li class="menu-item-has-children">
                        <a href="#works">Works</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio.html">Portfolio Page</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#blog">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-page.html">Blog Page</a></li>
                            <li><a href="single-page.html">Single Page</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="#">Demo Menu 1</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Demo Menu 2</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Demo Menu 1</a></li>
                                    <li><a href="#">Demo Menu 2</a></li>
                                    <li><a href="#">Demo Menu 3</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="<?=get_active_tab('signin')?>"> <a href="<?=base_url()?>signin" class="not-in-home">Sign in</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul> <!-- /.nav .navbar-nav -->
            </nav> <!-- /.navbar-collapse  -->
        </div> <!-- /.container -->
    </div><!-- /#main-menu -->
</div><!-- /.main-menu-continer -->
<!-- Menu End -->
