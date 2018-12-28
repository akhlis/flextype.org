<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>

<?php Themes::view('partials/head')->display(); ?>
<center>
    <div class="mega-header">
        <div class="js-admin-showcase admin-preview wow fadeIn">
                <ul>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-1.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-2.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-3.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-4.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-5.png" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('settings.theme'); ?>/assets/img/admin-6.png" alt="" />
                    </li>
                </ul>
        </div>
        <h2 class="h2">Introducing Flextype</h2>
        <p class="p">Modern Open Source Flat-File Content Management System</p>
        <a href="http://flextype.org/download" class="btn btn-outline-dark btn-download-flextype">Download Flextype</a>
    </div>
</center>

<div class="container section wow fadeIn">
<h3 class="section-heading">Features</h2>
<p class="section-description"></p>
  <div class="row">
    <div class="col-sm section-benefit">
        <center>
            <i class="fa fa-magic" aria-hidden="true"></i>
            <h4>Simple</h4>
            <p>Easy to install, upgrade and use.<br>No installation needed, just copy files to your server!</p>
        <center>
    </div>
    <div class="col-sm">
        <center>
            <i class="fa fa-rocket" aria-hidden="true"></i>
            <h4>Fast</h4>
            <p>Flextype is realy fast and lightweight! No database required, flat files only!</p>
        </center>
    </div>
    <div class="col-sm">
        <center>
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <h4>Flexible</h4>
            <p>Flextype provides amazing API for plugins, themes and core developers!</p>
        </center>
    </div>
  </div>
  <br><br>
  <div class="row">
      <div class="col-sm">
          <center>
              <i class="fa fa-font" aria-hidden="true"></i>
              <h4>Easy editing</h4>
              <p>Use your favorite editor to write your content with plain HTML and Flextype Shortcodes.</p>
          </center>
      </div>
    <div class="col-sm">
        <center>
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <h4>Dynamic Content Types</h4>
            <p>The flat-file nature of Flextype lets you define custom fields for any of your entrys.</p>
        </center>
    </div>
    <div class="col-sm">
        <center>
            <i class="fab fa-github" aria-hidden="true"></i>
            <h4>Open Source</h4>
            <p>Flextype is an open-source project licensed under the MIT LICENSE to set the world free!</p>
        </center>
    </div>
  </div>
</div>

<div class="container section wow fadeIn">
<h3 class="section-heading">Technologies</h2>
<p class="section-description">Flextype built on top of modern technologies.</p>
  <div class="row">
    <div class="col-sm section-benefit">
        <center>
            <i class="fab fa-php" aria-hidden="true"></i>
            <h4>Install Anywhere</h4>
            <p>To install Flextype, all you need is a server running PHP 7</p>
        <center>
    </div>
    <div class="col-sm">
        <center>
            <i class="fas fa-bold"></i>
            <h4>Responsive Framework</h4>
            <p>Develop responsive, mobile first projects with Twitter Bootstrap.</p>
        </center>
    </div>
    <div class="col-sm">
        <center>
            <i class="fab fa-sass" aria-hidden="true"></i>
            <h4>CSS with Superpowers</h4>
            <p>The most mature, stable, and powerful CSS extension language</p>
        </center>
    </div>
  </div>
</div>

<div class="container section wow fadeIn">
<h3 class="section-heading">NO LIMITS</h2>
<p class="section-description">With Flextype you can create any project you want.</p>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-sm">
        <p class="section-item"><i class="fas fa-star"></i> Business site</p>
        <p class="section-item"><i class="fas fa-star"></i> Landing entry</p>
        <p class="section-item"><i class="fas fa-star"></i> Personal site</p>
    </div>
    <div class="col-sm">
        <p class="section-item"><i class="fas fa-star"></i> Portfolio</p>
        <p class="section-item"><i class="fas fa-star"></i> Product site</p>
        <p class="section-item"><i class="fas fa-star"></i> E-Commerce</p>
    </div>
    <div class="col-sm">
        <p class="section-item"><i class="fas fa-star"></i> Documentation</p>
        <p class="section-item"><i class="fas fa-star"></i> Personal resume</p>
        <p class="section-item"><i class="fas fa-star"></i> Blog</p>
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container section wow fadeIn">
<h3 class="section-heading">Community</h2>
<p class="section-description">Flextype is open source, community driven project,<br> and maintained by community!</p>
  <div class="row">
    <div class="col-sm">
        <center>
            <a rel="nofollow" class="link-community" href="<?php echo Registry::get('settings.social_link.discord'); ?>">
                <i class="fab fa-discord"></i>
                <h4>Discord</h4>
            </a>
        <center>
    </div>
    <div class="col-sm">
        <center>
            <a rel="nofollow" class="link-community" target="_blank" href="<?php echo Registry::get('settings.social_link.github'); ?>">
                <i class="fab fa-github"></i>
                <h4>GitHub</h4>
            </a>
        </center>
    </div>
    <div class="col-sm">
        <center>
            <a rel="nofollow" class="link-community" target="_blank" href="<?php echo Registry::get('settings.social_link.vkontakte'); ?>">
                <i class="fab fa-vk"></i>
                <h4>Vkontakte</h4>
            </a>
        </center>
    </div>
    <div class="col-sm">
        <center>
            <a rel="nofollow" class="link-community" target="_blank" href="<?php echo Registry::get('settings.social_link.twitter'); ?>">
                <i class="fab fa-twitter"></i>
                <h4>Twitter</h4>
            </a>
        </center>
    </div>
  </div>
</div>

<div class="container section wow fadeIn">
<h3 class="section-heading">CONTRIBUTE</h2>
<p class="section-description">
Flextype is an open source project and community contributions are essential to its growing and success.
Contributing to the Flextype is easy and you can give as little or as much time as you want.
</p>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-sm">
        <p class="section-item"><i class="fas fa-star"></i> Help on the <a href="http://flextype.org/documentation/basics/getting-help">Communities</a>.</p>
        <p class="section-item"><i class="fas fa-star"></i> Develop a new plugin.</p>
        <p class="section-item"><i class="fas fa-star"></i> Create a new theme.</p>
    </div>
    <div class="col-sm">
        <p class="section-item"><i class="fas fa-star"></i> Find and <a href="https://github.com/flextype/flextype/issues">report issues</a>.</p>
        <p class="section-item"><i class="fas fa-star"></i> Link back to <a href="http://flextype.org">Flextype</a>.</p>
        <p class="section-item"><i class="fas fa-star"></i> <a href="http://flextype.org/about/sponsors">Donate to keep Flextype free.</a></p>
    </div>
    <div class="col-2"></div>
  </div>
</div>


<div class="container section wow fadeIn">
<h3 class="section-heading">Sponsors</h2>
<p class="section-description">
<a href="http://flextype.org/about/sponsors">Donate</a> to keep Flextype free and we will add you<br>
to this section and our <a href="http://flextype.org/about/sponsors">sponsors page</a>!
</p>
  <div class="row">
    <div class="col-4"></div>
    <div class="col-sm">
        <center>
            <p class="section-item"><a href="https://clusteric.com/" target="_blank">Pawel Sokolowski</a></p>
            <p class="section-item"><a href="https://vk.com/anastasiia.greca" target="_blank">Anastasiia Greca</a></p>
            <p class="section-item"><a href="https://vk.com/katerina.sitnikova" target="_blank">Katerina Sitnikova</a></p>
            <p class="section-item"><a href="https://vk.com/fantast21" target="_blank">Alexander Kuznetsov</a></p>
        </center>
    </div>
    <div class="col-4"></div>
  </div>
</div>

<br><br><br><br><br>

<?php echo $entry['content']; ?>

<?php Themes::view('partials/footer')->display(); ?>
