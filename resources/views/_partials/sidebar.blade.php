<div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="User Picture" style="width: 64px" src="{{url('images/user.png')}}">
                <span class="label label-danger user-label">16</span>
            </a>

            <div class="media-body">
                <h5 class="media-heading">Makamu Evans</h5>
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
            <a href="{{url('/')}}">
                <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Home</span>
            </a>
        </li>
        <li @if(isset($rightbar)) @if($rightbar=='user')class="active" @endif @endif>
            <a href="javascript:;">
                <i class="fa fa-user "></i>
                <span class="link-title">Users</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="{{url('users/view')}}">
                        <i class="fa fa-list"></i>&nbsp; List All </a>
                </li>
                <li class="active">
                    <a href="{{url('users/add')}}">
                        <i class="fa fa-plus-square"></i>&nbsp; Add New User </a>
                </li>
            </ul>
        </li>
        <li @if(isset($rightbar)) @if($rightbar=='client')class="active" @endif @endif>
            <a href="javascript:;">
                <i class="fa fa-user "></i>
                <span class="link-title">Clients</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="{{url('clients')}}">
                        <i class="fa fa-list"></i>&nbsp; List All </a>
                </li>
                <li>
                    <a href="{{url('clients/add')}}">
                        <i class="fa fa-plus-square"></i>&nbsp; Add New Client </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /#menu -->
</div>
<!-- /#left -->