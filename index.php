<?php defined( '_JEXEC' ) or die( 'Restricted access' );

include 'includes/params.php';

?>


<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
  <jdoc:include type="head" />
</head>
<body>


<!-- Main menu -->


  <?php if ($this->countModules('main-menu')) : ?>
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><?php echo $sitename?></a>
      </div>
      <div class="collapse navbar-collapse">
        <jdoc:include type="modules" name="main-menu" />
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <?php endif; ?>



<!-- body -->

<div class="container">

  <div class="row">


    <!-- sideleft column -->


    <?php if ($this->countModules('side-left')) : ?>
    <div class="col-md-3">
      <jdoc:include type="modules" name="side-left" />
    </div>
    <?php endif; ?>

    <!-- Content -->

    <div class="col-md-<?php echo (12 - $sidecols)?>">
      <!-- content top -->


      <?php if ($this->countModules('content-top')) : ?>
      <div class="content-top">
        <jdoc:include type="modules" name="content-top" />
      </div>
      <?php endif; ?>

      <!-- main content -->


      <div class="content-main">
        <jdoc:include type="component" />
        <jdoc:include type="message" />
      </div>

      <!-- content bottom -->

      <?php if ($this->countModules('content-bottom')) : ?>
      <div class="content-bottom">
        <jdoc:include type="modules" name="content-bottom" />
      </div>
      <?php endif; ?>


    </div>

    <!-- sideright column -->


    <?php if ($this->countModules('side-right')) : ?>
    <div class="col-md-3">
      <jdoc:include type="modules" name="side-right" />
    </div>
    <?php endif; ?>


  </div>

</div>



<!-- Footer -->


<div class="footer">
  <div class="container">
    <jdoc:include type="modules" name="footer" />
  </div>
</div>



</body>
</html>