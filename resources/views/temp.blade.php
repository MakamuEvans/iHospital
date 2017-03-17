@extends('layouts.app')

@section('content')
<div class="bg-dark dk" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">


                <!-- Brand and toggle get grouped for better mobile display -->
                <header class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>

                </header>



                <div class="topnav">
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                           class="btn btn-default btn-sm" id="toggleFullScreen">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                           class="btn btn-default btn-sm">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-warning">5</span>
                        </a>
                        <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                           class="btn btn-default btn-sm">
                            <i class="fa fa-comments"></i>
                            <span class="label label-danger">4</span>
                        </a>
                        <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                           class="btn btn-default btn-sm"
                           href="#helpModal">
                            <i class="fa fa-question"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                           class="btn btn-metis-1 btn-sm">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                           class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                            <span class="fa fa-fw fa-comment"></span>
                        </a>
                    </div>

                </div>




                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <!-- .nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="table.html">Tables</a></li>
                        <li class='dropdown '>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Form Elements <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="form-general.html">General</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.nav -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <header class="head">
            <div class="search-bar">
                <form class="main-search" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Live Search ...">
                        <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                    </div>
                </form>
                <!-- /.main-search -->                                </div>
            <!-- /.search-bar -->
            <div class="main-bar">
                <h3>
                    <i class="fa fa-home"></i>&nbsp;
                    Metis
                </h3>
            </div>
            <!-- /.main-bar -->
        </header>
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div id="left">
        <div class="media user-media bg-dark dker">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="user-wrapper bg-dark">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                    <span class="label label-danger user-label">16</span>
                </a>

                <div class="media-body">
                    <h5 class="media-heading">Archie</h5>
                    <ul class="list-unstyled user-info">
                        <li><a href="">Administrator</a></li>
                        <li>Last Access : <br>
                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
            <li class="nav-header">Menu</li>
            <li class="nav-divider"></li>
            <li class="">
                <a href="dashboard.html">
                    <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-building "></i>
                    <span class="link-title">Layouts</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="boxed.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
                    </li>
                    <li>
                        <a href="fixed-header-boxed.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
                    </li>
                    <li>
                        <a href="fixed-header-fixed-mini-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
                    </li>
                    <li>
                        <a href="fixed-header-menu.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
                    </li>
                    <li>
                        <a href="fixed-header-mini-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
                    </li>
                    <li>
                        <a href="fixed-header.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
                    </li>
                    <li>
                        <a href="fixed-menu-boxed.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
                    </li>
                    <li>
                        <a href="fixed-menu.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
                    </li>
                    <li>
                        <a href="fixed-mini-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
                    </li>
                    <li>
                        <a href="fxhmoxed.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
                    </li>
                    <li>
                        <a href="no-header-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
                    </li>
                    <li>
                        <a href="no-header.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
                    </li>
                    <li>
                        <a href="no-left-right-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
                    </li>
                    <li>
                        <a href="no-left-sidebar-main-search.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
                    </li>
                    <li>
                        <a href="no-left-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
                    </li>
                    <li>
                        <a href="no-main-search.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
                    </li>
                    <li>
                        <a href="no-right-sidebar.html">
                            <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
                    </li>
                    <li>
                        <a href="sm.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span class="link-title">Components</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="bgcolor.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
                    </li>
                    <li>
                        <a href="bgimage.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
                    </li>
                    <li>
                        <a href="button.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
                    </li>
                    <li>
                        <a href="icon.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
                    </li>
                    <li>
                        <a href="pricing.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
                    </li>
                    <li>
                        <a href="progress.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-pencil"></i>
                    <span class="link-title">
                                    Forms
                        	  </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="form-general.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
                    </li>
                    <li>
                        <a href="form-validation.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
                    </li>
                    <li>
                        <a href="form-wizard.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
                    </li>
                    <li>
                        <a href="form-wysiwyg.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="table.html">
                    <i class="fa fa-table"></i>
                    <span class="link-title">Tables</span>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="fa fa-font"></i>
                    <span class="link-title">
                                    Typography
                                  </span>  </a>
            </li>
            <li>
                <a href="maps.html">
                    <i class="fa fa-map-marker"></i><span class="link-title">
                                    Maps
                                  </span>
                </a>
            </li>
            <li>
                <a href="chart.html">
                    <i class="fa fa fa-bar-chart-o"></i>
                    <span class="link-title">
                                    Charts
                                  </span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="fa fa-calendar"></i>
                    <span class="link-title">
                                    Calendar
                                  </span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                                      Error Pages
                                    </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="403.html">
                            <i class="fa fa-angle-right"></i>&nbsp;403</a>
                    </li>
                    <li>
                        <a href="404.html">
                            <i class="fa fa-angle-right"></i>&nbsp;404</a>
                    </li>
                    <li>
                        <a href="405.html">
                            <i class="fa fa-angle-right"></i>&nbsp;405</a>
                    </li>
                    <li>
                        <a href="500.html">
                            <i class="fa fa-angle-right"></i>&nbsp;500</a>
                    </li>
                    <li>
                        <a href="503.html">
                            <i class="fa fa-angle-right"></i>&nbsp;503</a>
                    </li>
                    <li>
                        <a href="offline.html">
                            <i class="fa fa-angle-right"></i>&nbsp;offline</a>
                    </li>
                    <li>
                        <a href="countdown.html">
                            <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="grid.html">
                    <i class="fa fa-columns"></i>
                    <span class="link-title">
                            Grid
                            </span>
                </a>
            </li>
            <li>
                <a href="blank.html">
                    <i class="fa fa-square-o"></i>
                    <span class="link-title">
                            Blank Page
                            </span>
                </a>
            </li>
            <li class="nav-divider"></li>
            <li>
                <a href="login.html">
                    <i class="fa fa-sign-in"></i>
                    <span class="link-title">
                            Login Page
                            </span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-code"></i>
                    <span class="link-title">
                            	Unlimited Level Menu
                            	</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                        <ul class="collapse">
                            <li> <a href="javascript:;">Level 2</a>  </li>
                            <li> <a href="javascript:;">Level 2</a>  </li>
                            <li>
                                <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                                <ul class="collapse">
                                    <li> <a href="javascript:;">Level 3</a>  </li>
                                    <li> <a href="javascript:;">Level 3</a>  </li>
                                    <li>
                                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                                        <ul class="collapse">
                                            <li> <a href="javascript:;">Level 4</a>  </li>
                                            <li> <a href="javascript:;">Level 4</a>  </li>
                                            <li>
                                                <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                                                <ul class="collapse">
                                                    <li> <a href="javascript:;">Level 5</a>  </li>
                                                    <li> <a href="javascript:;">Level 5</a>  </li>
                                                    <li> <a href="javascript:;">Level 5</a>  </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Level 4</a>  </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Level 2</a>  </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:;">Level 1</a>  </li>
                    <li>
                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                        <ul class="collapse">
                            <li> <a href="javascript:;">Level 2</a>  </li>
                            <li> <a href="javascript:;">Level 2</a>  </li>
                            <li> <a href="javascript:;">Level 2</a>  </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#menu -->
    </div>
    <!-- /#left -->
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <div class="col-lg-12">
                    <h1>bootstrap-admin-template</h1>
                    <p>Metis is a simple yet powerful free Bootstrap admin dashboard template that you can feel free to use for any app, service, software or anything else. Feel free to share and fork it.</p>
                    <p>This template currently is slighly outdated but withing few weeks we are going to make a major overhaul making ot the best free admin template you have seen on Github or elsehwere on the web.</p>
                    <ul>
                        <li><a href="https://travis-ci.org/Osman%20Nuri%20Okumus/bootstrap-admin-template"><img src="https://img.shields.io/travis/Osman%20Nuri%20Okumus/bootstrap-admin-template.svg?style=flat" alt="Build Status"></a></li>
                        <li><a href="https://david-dm.org/puikinsh/Bootstrap-Admin-Template"><img src="https://david-dm.org/puikinsh/Bootstrap-Admin-Template.svg?theme=shields.io" alt="Dependency Status"></a></li>
                        <li><a href="https://david-dm.org/puikinsh/Bootstrap-Admin-Template#info=devDependencies"><img src="https://david-dm.org/puikinsh/Bootstrap-Admin-Template/dev-status.svg?theme=shields.io" alt="devDependency Status"></a></li>
                    </ul>
                    <h2>TOC</h2>
                    <ul>
                        <li><a href="#download">Download</a>
                            <ul>
                                <li><a href="#building">Building</a></li>
                                <li><a href="#demo">Demo</a></li>
                                <li><a href="#release-history">Release History</a></li>
                                <li><a href="#credits">Credits</a></li>
                                <li><a href="#author">Author</a></li>
                                <li><a href="#license">License</a></li>
                            </ul></li>
                    </ul>
                    <h2>Download</h2>
                    <ul>
                        <li>Bootstrap 2.3.2 <a href="https://github.com/puikinsh/Bootstrap-Admin-Template/archive/v1.2.zip">v1.2</a>
                            ready for use</li>
                        <li>Bootstrap 3.3.7 <a href="https://puikinsh.com/puikinsh/Bootstrap-Admin-Template/archive/master.zip">v2.3.2</a>
                            ready <code>public</code> folder your use</li>
                    </ul>
                    <h4>2.3.2 Version</h4>
                    <p>required <a href="http://nodejs.org/">node.js</a> & <a href="http://bower.io/">bower</a> & <a href="http://gulpjs.com/">gulp</a></p>
                    <pre><code class="lang-shell">    $ git clone https://github.com/puikinsh/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ npm install
    $ bower install
    $ npm run build
    $ gulp serve
</code></pre>
                    <h4>2.3.2 RTL Version</h4>
                    <p>required <a href="http://nodejs.org/">node.js</a> & <a href="http://bower.io/">bower</a> & <a href="http://gulpjs.com/">gulp</a></p>
                    <pre><code class="lang-shell">    $ git clone https://github.com/puikinsh/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ npm install
    $ bower install
    $ npm run buildrtl
    $ gulp serve
</code></pre>
                    <h4>1.2 Version</h4>
                    <pre><code class="lang-shell">    $ git clone -b v1.2 https://github.com/puikinsh/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ git submodule init
    $ git submodule update
    $ open index.html
</code></pre>
                    <h2>Demo</h2>
                    <ul>
                        <li><a href="https://colorlib.com/polygon/metis/">Demo v2.3.2</a></li>
                        <li><a href="https://colorlib.com/polygon/metis/rtl/">RTL v2.3.2</a></li>
                    </ul>
                    <h2>Credits</h2>
                    <ul>
                        <li><a href="http://nodejs.org/">node.js</a></li>
                        <li><a href="http://bower.io/">bower</a></li>
                        <li><a href="http://gulpjs.com/">gulp</a></li>
                        <li><a href="http://assemble.io/">Assemble</a></li>
                        <li><a href="http://jquery.com/">jQuery</a></li>
                        <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
                        <li><a href="http://lesscss.org/">LESS</a></li>
                        <li><a href="http://momentjs.com/">Moment.js</a></li>
                        <li><a href="https://github.com/subtlepatterns/SubtlePatterns">SubtlePatterns</a></li>
                        <li><a href="http://arshaw.com/fullcalendar/">FullCalendar</a></li>
                        <li><a href="https://github.com/harvesthq/chosen">Chosen</a></li>
                        <li><a href="http://ckeditor.com/">CKEditor</a></li>
                        <li><a href="http://www.eyecon.ro/bootstrap-colorpicker/">Colorpicker for Bootstrap</a></li>
                        <li><a href="http://www.datatables.net">Data Tables</a></li>
                        <li><a href="http://www.eyecon.ro/bootstrap-datepicker">Datepicker for Bootstrap</a></li>
                        <li><a href="http://elfinder.org">elFinder</a></li>
                        <li><a href="http://rustyjeans.com/jquery-plugins/input-limiter">Input Limiter</a></li>
                        <li><a href="http://jasny.github.com/bootstrap">Jasny Bootstrap</a></li>
                        <li><a href="http://jqueryvalidation.org/">jQuery Validation</a></li>
                        <li><a href="http://omnipotent.net/jquery.sparkline">jQuery Sparklines</a></li>
                        <li><a href="http://daneden.github.io/animate.css/">Animate</a></li>
                        <li><a href="http://www.jacklmoore.com/autosize">Autosize</a></li>
                        <li><a href="http://keith-wood.name/countdown.html">Countdown</a></li>
                        <li><a href="https://github.com/dangrossman/bootstrap-daterangepicker">Date range picker</a></li>
                        <li><a href="http://www.flotcharts.org">Flot</a></li>
                        <li><a href="http://jquery.malsup.com/form/">jQuery Form</a></li>
                        <li><a href="http://thecodemine.org">Form Wizard</a></li>
                        <li><a href="http://boedesign.com/blog/2009/07/11/growl-for-jquery-gritter/">Gritter</a></li>
                        <li><a href="https://github.com/brandonaaron/jquery-mousewheel">Mouse Wheel</a></li>
                        <li><a href="https://github.com/kevinoconnor7/pagedown-bootstrap">PageDown-Bootstrap</a></li>
                        <li><a href="https://github.com/moxiecode/plupload">Plupload</a></li>
                        <li><a href="http://www.larentis.eu/switch/">Bootstrap Switch</a></li>
                        <li><a href="http://tablesorter.com/">tablesorter</a></li>
                        <li><a href="http://xoxco.com/projects/code/tagsinput/">tagsinput</a></li>
                        <li><a href="http://jdewit.github.io/bootstrap-timepicker/">Bootstrap Timepicker</a></li>
                        <li><a href="http://touchpunch.furf.com/">Touch Punch</a></li>
                        <li><a href="http://uniformjs.com/">Uniform</a></li>
                        <li><a href="http://www.position-relative.net/">Validation Engine</a></li>
                        <li><a href="http://validval.frebsite.nl/">jquery.validVal</a></li>
                        <li><a href="https://github.com/Waxolunist/bootstrap3-wysihtml5-bower">bootstrap3-wysihtml5-bower</a></li>
                        <li><a href="https://github.com/sindresorhus/screenfull.js">screenfull.js</a></li>
                        <li><a href="https://github.com/onokumus/metisMenu">metisMenu</a></li>
                    </ul>
                    <h2>About Authors</h2>
                    <ul>
                        <li><a href="https://colorlib.com/">Colorlib</a> - Colorlib is the most popular source for free WordPress themes and HTML templates.</li>
                        <li><a href="https://twitter.com/AigarsSilkalns">Aigars Silkalns</a> - Aigars maintains this project and is also the idea author behind Colorlib and everythiwn you will find on that website.</li>
                    </ul>
                    <h2>License</h2>
                    <p>Copyright (c) 2016 Aigars Silkalns & Colorlib</p>
                    <p>Released under the MIT license. This free Bootstrap admin template is distributed as as it with no support. You can feeel free to use it, share it, tweakit it, workin it, sell it or do whatver you want as long as you keep the original license in plce.</p>
                    <hr>
                    <p><em>This file was generated by <a href="https://github.com/verbose/verb">verb</a>, v0.9.0, on July 31, 2016.</em></p>

                </div>

            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    <!-- /#content -->

    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
        <br>
        <br>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <!-- .well well-small -->
        <div class="well well-small dark">
            <ul class="list-unstyled">
                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
            </ul>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <button class="btn btn-block">Default</button>
            <button class="btn btn-primary btn-block">Primary</button>
            <button class="btn btn-info btn-block">Info</button>
            <button class="btn btn-success btn-block">Success</button>
            <button class="btn btn-danger btn-block">Danger</button>
            <button class="btn btn-warning btn-block">Warning</button>
            <button class="btn btn-inverse btn-block">Inverse</button>
            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <span>Default</span><span class="pull-right"><small>20%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <span>Success</span><span class="pull-right"><small>40%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <span>warning</span><span class="pull-right"><small>60%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <span>Danger</span><span class="pull-right"><small>80%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
        </div>
    </div>
    <!-- /#right -->
</div>
<!-- /#wrap -->
<footer class="Footer bg-dark dker">
    <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
</footer>
<!-- /#footer -->
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->
<!--jQuery -->
<script src="assets/lib/jquery/jquery.js"></script>


<!--Bootstrap -->
<script src="assets/lib/bootstrap/js/bootstrap.js"></script>
<!-- MetisMenu -->
<script src="assets/lib/metismenu/metisMenu.js"></script>
<!-- onoffcanvas -->
<script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
<!-- Screenfull -->
<script src="assets/lib/screenfull/screenfull.js"></script>


<!-- Metis core scripts -->
<script src="assets/js/core.js"></script>
<!-- Metis demo scripts -->
<script src="assets/js/app.js"></script>


<script src="assets/js/style-switcher.js"></script>
@endsection