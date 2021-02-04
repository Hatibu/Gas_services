
<body style="font-family: 'Georgia', sans-serif; 
  font-size:14px;">

<section id="container" >

      <!--header start-->
      <header class="header black-bg navbar">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>ONLINE GAS SERVICE SYSTEM</b></a>
            <!--logo end-->
            <div class="top-menu"> 
              <ul class="nav pull-left top-menu">
                <li class="dropdown" style="margin: 15px 0px 5px 35px;">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle" onclick="now_notification();">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-theme" id="count"></span>
                  </a>
                  <ul class="dropdown-menu" >
                      <!--loading the notification-->
                  </ul>
                </li>
              </ul>
              
              	<ul class="nav pull-right top-menu">
                  <li>
                    <a class="logout" href="index.php?p=logout">Logout</a>
                  </li>
              	</ul>
            </div>
        </header>
      <!--header end--> 

    <body onload="count_notification(),notification(),OutBox_notification();"> 
      <input type="hidden" id="user" value="<?php echo $_SESSION['level'];?>"> 
      <input type="hidden" id="user_id" value="<?php echo $_SESSION['username'];?>">       
      