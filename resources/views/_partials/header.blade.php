<div id="top">
    <template id="vuenav">
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
                    <a href="" class="navbar-brand">
                        <img src="{{url('images/logo.png')}}" style="max-height: 50px;width: auto">
                    </a>

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
                        <li><a href="{{url('/')}}"><i class="fa fa-home"> Home</i></a></li>
                        <li><a href=""><i class="fa fa-user-md"> My Profile</i></a></li>
                        <li class='dropdown '>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Atherere <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                {{--<li><a href="form-general.html">General</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>--}}
                            </ul>
                        </li>
                    </ul>
                    <!-- /.nav -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
    </template>

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
            <h3 style="color: #53CDF6">
                {{ $title }}
            </h3>
        </div>
        <!-- /.main-bar -->
    </header>
    <!-- /.head -->
</div>
<!-- /#top -->