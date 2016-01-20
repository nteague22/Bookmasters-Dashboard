<!--header start-->
<!--logo start-->
<div class="brand">
   <a href="#/app/dashboard/" class="logo">
      <img src="//dashboard.bookmasters.com/cdn/resources/brand/bm/small/flat-horiz-white.png" alt="">
   </a>
   <div class="sidebar-toggle-box" data-bm-action='toggle-left-sidebar'>
      <div class="fa fa-bars"></div>
   </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
   <!--  notification start -->
   <ul class="nav top-menu"></ul>
   <!--  notification end -->
</div>
<div class="top-nav clearfix">
   <!--search & user info start-->
   <ul class="nav pull-right top-menu">
      <li>
         <input type="text" class="form-control search" placeholder=" Search">
      </li>
      <!-- user login dropdown start-->
      <li class="dropdown">
         <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img alt="" src="//dashboard.bookmasters.com/cdn/resources/img/badger.png" width="33" height="33">
            <span class="username">{{user.credentials.username}} <!--{{user.user.firstname}} {{user.user.lastname}}--></span>
            <span class="label label-info" style="font-size: 10.5px;">{{user.roles[0]}}</span>
            <b class="caret"></b>
         </a>
         <ul class="dropdown-menu extended logout">
            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
            <li><a data-ui-sref="bm.app.page({ 'app': 'AccountSettings','page': 'home', child: null })"><i class="fa fa-cog"></i> Account Settings</a></li>
            <li><a href="#" ng-click="logout()"><i class="fa fa-key"></i> Log Out</a></li>
         </ul>
      </li>
      <!-- user login dropdown end -->
      <li>
         <div class="toggle-right-box">
            <div class="fa fa-bars"></div>
         </div>
      </li>
   </ul>
   <!--search & user info end-->
</div>

<!--header end-->
