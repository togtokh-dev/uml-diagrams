<!--begin::Header Menu Wrapper-->
<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
  <!--begin::Header Menu-->
  <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
    <!--begin::Header Nav-->
    <ul class="menu-nav">
      <?php
       $results = mysqli_query($db, "SELECT * FROM datas");
      ?>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
        <?php if($row['id']==$id){
           echo'<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here " data-menu-toggle="click" aria-haspopup="true">';
         }else{
            echo' <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">';
          } ?>
          <a href="?id=<?php echo $row['id'];  ?>" class="menu-link ">
            <span class="menu-text text-center text-hover-warning">
            <?php if($lan=='mon_name'){ ?>
                <?php print_r($row['title']); ?>
            <?php }else{ ?>
                <?php print_r($row['title_en']); ?>
            <?php } ?></span>
            <i class="menu-arrow"></i>
          </a>
       </li>
      <?php } ?>
    </ul>
    <!--end::Header Nav-->
  </div>
  <!--end::Header Menu-->
</div>
<!--end::Header Menu Wrapper-->
