 
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
			<!-- 	<li class="text-center">
                    <img src="<?= base_url()?>assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				 -->
                 <?php $id = $this->uri->segment(3);?>

					
                    <li>
                        <a class="<?=(current_url()==base_url('') || current_url()==base_url('dashboard') ) ? 'active-menu':''?> "  href="<?= base_url()?>dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="<?=(current_url()==base_url('UI')) ? 'active-menu':''?> " href="<?= base_url()?>UI"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a class="<?=(current_url()==base_url('Tab_panel')) ? 'active-menu':''?> " href="<?= base_url()?>Tab_panel"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a class="<?=(current_url()==base_url('Charts')) ? 'active-menu':''?> "  href="<?= base_url()?>Charts"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a class="<?=(current_url()==base_url('Tables')) ? 'active-menu':''?> "  href="<?= base_url()?>Tables"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a class="<?=(current_url()==base_url('Forms')) || (current_url()==base_url('Forms/add')) || (current_url()==base_url('Forms/Edit/'.$id.'')) ? 'active-menu':''?> " href="<?= base_url()?>Forms"><i class="fa fa-edit fa-3x"></i> Forms  </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class="<?=(current_url()==base_url('Blank')) ? 'active-menu':''?> " href="<?= base_url()?>Blank"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->