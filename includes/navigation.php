
 <!--sidebar start-->
 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                    <h5 class="centered"><?php echo $_SESSION["level"];?></h5>
                        
            <?php
           if($_SESSION["level"] == "Dealer"){

            ?>  
                  <li>
                    <a href="index.php?p=Edit_info"><i class="fa fa-edit fa-fw"></i> Edit Info</a> 
                  </li>
                  <li>
                    <a href="index.php?p=order"><i class="fa fa-edit fa-fw"></i> Place Order</a>
                  </li>
                   <li>
                    <a href="index.php?p=view"><i class="fa fa-edit fa-fw"></i>PayNow</a> 
                  </li>
                  <li>
                    <a href="index.php?p=notifi"><i class="fa fa-edit fa-fw"></i> Notification </a>        
                  </li>
                  <li>
                    <a href="index.php?p=history"><i class="fa fa-edit fa-fw"></i> View Orders</a>
                  </li>
                  
            <?php
            }
          ?>  

          <?php
           if($_SESSION["level"] == "Administrator"){
            ?>
                  <li>
                    <a href="index.php?p=registr" ><i class="fa fa-edit fa-fw"></i>Register Dealers</a>                      
                  </li>

                  <li>
                    <a href="index.php?p=employ"><i class="fa fa-edit fa-fw"></i>Register Employees </a>        
                  </li>

                  <li>
                    <a href="index.php?p=notifi"><i class="fa fa-edit fa-fw"></i> Notification</a>        
                  </li>

                   <li>
                    <a href="index.php?p=view_dealer"><i class="fa fa-edit fa-fw"></i>View Dealer</a>                        
                  </li>

                  <li>
                    <a href="index.php?p=view_employ"><i class="fa fa-edit fa-fw"></i> View Employees</a>        
                  </li>
                  <li>
                    <a href="index.php?p=view_appli"><i class="fa fa-edit fa-fw"></i> View Applicants</a>        
                  </li>

          <?php
            }
          ?>

          <?php
           if($_SESSION["level"] == "SuperDealer"){
          ?>
            <li>
                <a href="index.php?p=Edit_info_spd"><i class="fa fa-edit fa-fw"></i>Edit Info</a>        
            </li> 
            <li>
                <a href="index.php?p=report"><i class="fa fa-edit fa-fw"></i>Payment Report</a>        
            </li>

            <li>
                <a href="index.php?p=store-report"><i class="fa fa-edit fa-fw"></i>Store Report</a>        
            </li>
           
            <li>
              <a href="index.php?p=notifi"><i class="fa fa-edit fa-fw"></i> Notification </a>        
            </li>

             
            <li>
                <a href="index.php?p=view_spd"><i class="fa fa-edit fa-fw"></i> View Dealer </a>        
            </li>

            <li>
                <a href="index.php?p=view_employees"><i class="fa fa-edit fa-fw"></i>View Employees</a>        
            </li>

            <li>
                <a href="index.php?p=new_applicant"><i class="fa fa-edit fa-fw"></i> View New Applicants </a>
            </li>
                

          <?php
            }
          ?>

          <?php
           if($_SESSION["level"] == "Accountant"){
          ?>

            <li>
              <a href="index.php?p=Edit_info_at"><i class="fa fa-edit fa-fw"></i> Edit Info</a>     
            </li>

            <li>
              <a href="index.php?p=view_order_details"><i class="fa fa-edit fa-fw"></i> View Orders </a>        
            </li>

            <li>
              <a href="index.php?p=notifi"><i class="fa fa-edit fa-fw"></i> Notification</a>        
            </li>
            
            <li>
              <a href="index.php?p=change_price"><i class="fa fa-edit fa-fw"></i> Change Price</a>        
            </li>
          <?php
            }
          ?>

          <?php
           if($_SESSION["level"] == "StoreKeeper"){
          ?>

            <li>
              <a href="index.php?p=edit_store"><i class="fa fa-edit fa-fw"></i> Edit Info</a>        
            </li>

            <li>
              <a href="index.php?p=notifi"><i class="fa fa-edit fa-fw"></i> Notification </a>        
            </li>

            <li>
              <a href="index.php?p=Add_gas"><i class="fa fa-edit fa-fw"></i>Add Gas Cylinder</a>        
            </li>

            <li>
              <a href="index.php?p=view_store"><i class="fa fa-edit fa-fw"></i> View Store </a>        
            </li>

            <li>
              <a href="index.php?p=processing"><i class="fa fa-edit fa-fw"></i> Processing Order</a>        
            </li>

          <?php
            }
          ?>


            <li>
              <a href="index.php?p=change"><i class="fa fa-edit fa-fw"></i> Change Password</a> 
            </li>     

               </ul>   
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <p><br></p>
<!--main content start-->
  <section id="main-content">
      <section class="wrapper">  