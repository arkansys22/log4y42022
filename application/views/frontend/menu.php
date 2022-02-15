
<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
  <header id="ashade-header">
        <div class="ashade-header-inner">
            <div class="ashade-logo-block">
                <a href="<?php echo base_url()?>" class="ashade-logo is-retina">
                  <img src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>" alt="Ashade Logo" >
                </a>
            </div>
            <div class="ashade-nav-block">
                <nav class="ashade-nav">
                    <ul class="main-menu">
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>works">Works</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>services">Services</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>reviews">Reviews</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>about">About us</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo base_url()?>blogs">Articles</a>
                        </li>
                        <li>
              <a href="#" class="ashade-aside-toggler">
                <span class="ashade-aside-toggler__icon01"></span>
                <span class="ashade-aside-toggler__icon02"></span>
                <span class="ashade-aside-toggler__icon03"></span>
              </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
