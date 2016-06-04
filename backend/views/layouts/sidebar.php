<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<header class="main-header">

    <!-- Logo -->
    <a href="a/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=   Url::to(['site/index']);?>">首页 <span class="sr-only">(current)</span></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">快速通道 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=   Url::to(['customer/index']);?>">客户管理</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>





      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- /.messages-menu -->

          <!-- Notifications Menu -->

          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>

          </li>
		              <li><a href="#">Link</a></li>
     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <i class="fa fa-user"></i> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"> <i class="fa fa-user-plus"></i>    Action</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i>     Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>

          <!-- User Account Menu -->

          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->


      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">LIST</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>客户管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li>  <a href="<?=   Url::to(['customer/index']);?>"> <i class="fa fa-angle-left  pull-right"></i> 客户列表</a></li>
            <li> <a href="<?=   Url::to(['customer/create']);?>"><i class="fa fa-angle-left  pull-right"></i>添加客户</a></li>
          </ul>
        </li>



		  <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>系统管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-newspaper-o"></i> <span>新闻中心</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>



      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>