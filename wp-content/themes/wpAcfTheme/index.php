<?php
/**
 * Main Template file
 * @package rsq
 * @author rsq
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main bg-slate-500 min-h-screen">
        <h1 class="text-slate-50 text-lg font-thin">RSQ Salva oper</h1>
      </main>
    </div>
  </div>
</body>
</html>