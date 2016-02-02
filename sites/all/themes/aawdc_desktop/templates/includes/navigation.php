 <!--.l-header -->
  <header class="l-header">

  	<a href="<?php print $front_page; ?>" class="logo"></a>

         <nav>
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
        </nav>
        <?php print render($page['header']); ?>

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">

        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->
