<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                        <span class="sr-only"><?php echo $this->lang->line('toggle_navigation'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
 
//print_r($main_menus);
                        foreach ($main_menus as $menu_key => $menu_value) {
                            $submenus = false;
                            $cls_menu_dropdown = "";
                            $menu_selected = "";
                            if ($menu_value['page_slug'] == $active_menu) {
                                $menu_selected = "active";
                            }
                            if (!empty($menu_value['submenus'])) {
                                $submenus = true;
                                $cls_menu_dropdown = "dropdown";
                            }
                            ?>

                            <li class="<?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                <?php
                                if (!$submenus) {
                                    $top_new_tab = '';
                                    $url = '#';
                                    if ($menu_value['open_new_tab']) {
                                        $top_new_tab = "target='_blank'";
                                    }
                                    if ($menu_value['ext_url']) {
                                        $url = $menu_value['ext_url_link'];
                                    } else {
                                        $url = site_url($menu_value['page_url']);
                                    }
                                    ?>

                                    <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                    <?php
                                } else {
                                    $child_new_tab = '';
                                    $url = '#';
                                    ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <?php
										$submenus2 = false;
                                        foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
											
										$sm2Info = $this->db->query("SELECT * FROM `front_cms_menu_items` WHERE parent_id = '".$submenu_value['id']."' ")->result();

                                            if ($submenu_value['open_new_tab']) {
                                                $child_new_tab = "target='_blank'";
                                            }
                                            if ($submenu_value['ext_url']) {
                                                $url = $submenu_value['ext_url_link'];
                                            } else {
                                                $url = site_url($submenu_value['page_url']);
                                            }
                                            ?>
                                      		<?php if (empty($sm2Info)) { ?>
                                            <li><a href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a>
                  							<?php } else { ?>
                  							<li class="dropdown-submenu"><a href="#" ><?php echo $submenu_value['menu'] ?></a>
                  							<?php } ?>
                  
                  
                  							<?php
											if (!empty($sm2Info)) { ?><ul class="dropdown-menu">

											<?php
                                            foreach ($sm2Info as $sm2) {
                                                
                                                
                                                if ($sm2->open_new_tab) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($sm2->ext_url) {
                                                    $url = $sm2->ext_url_link;
                                                } else {
                                                    $url = site_url($sm2->page_url);
                                                }
                                                ?>
                                                <li><a href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $sm2->menu ?></a></li>
                                                
                                                
                                                
                                                
                                                
                                                
                                                <?php
            } ?></ul><?php
                                            }
                                            ?>
                  
                  
                  
                  
                  
                  </li>
              
              								
              
              								
                                            <?php
                                        }
                                        ?>

                                    </ul>

                                    <?php
                                }
                                ?>


                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /.navbar -->
        </div><!--./col-md-12-->
    </div><!--./row-->
</div><!--./container-->