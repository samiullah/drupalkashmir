<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

 <?php print $mothership_poorthemers_helper; ?>
  <header role="banner">
  <div class="navbar">

    <div class="navbar__logo">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

    </div>

    <div class="navbar__menu--button">
      <i class="navbar--search icon-search"></i>
      <i class="navbar--menu icon-reorder"></i>
    </div>
  </div>

  <?php if($page['header']): ?>
    <div class="header-region">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>

</header>


<div class="page">

  <div role="main" id="#main-content">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="default_title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>



    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>

    <?php if ($page['banner']): ?>
      <div class="banner">
        <?php print render($page['banner']); ?>
      </div> <!-- /.banner-->
    <?php endif; ?>


    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->


  <?php if ($page['sidebar_first']): ?>
    <div class="sidebar-first">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div><!--/page-->

<?php if ($page['primary_footer']): ?>
      <div class="primary_footer">
        <?php print render($page['primary_footer']); ?>
      </div> <!-- /.primary_footer-->
    <?php endif; ?>

<footer role="contentinfo">
  <?php print render($page['footer']); ?>
 </footer>


