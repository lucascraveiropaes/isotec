<?php
	function get_navbar($id) {
	/*
		The 'id' variable represents the position on the navbar that must be active
	*/
?>

		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container-fluid">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo">
							<a href="index.html">
								<!--ISO<span>TEC</span-->
								<img src="<?php bloginfo( 'template_url' ); ?>/images/isotec/top-bar.png" width="170">
							</a>
						</h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li <?php if($id==1) echo 'class="active"'; ?>>
									<a href="<?php echo get_home_url(); ?>/">Início</a>
								</li>
								<li <?php if($id==2) echo 'class="active"'; ?>>
									<a href="<?php echo get_home_url(); ?>/#trabalhos">Trabalhos</a>
								</li>
								<li <?php if($id==3) echo 'class="active"'; ?>>
									<a href="<?php echo get_home_url(); ?>/#clientes">Clientes</a>
								</li>
								<li <?php if($id==4) echo 'class="active"'; ?>>
									<a href="/blog">Blog</a>
								</li>
								<li <?php if($id==5) echo 'class="active"'; ?>>
									<a href="/produtos">Produtos</a>
								</li>
								<li <?php if($id==6) echo 'class="active"'; ?>>
									<a href="/contato">Contato</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>


        <?php/*
			$mypost = array( 'post_type' => 'ministerios');
		    $loop = new WP_Query( $mypost );
        ?>
        <?php while (  $loop->have_posts() ) : $loop->the_post();?>
			<li>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; wp_reset_postdata(); */?>
<?php
	}


	add_theme_support('category-thumbnails');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );


	/* Adding CSS on Header */
	function get_styles(){

		$template_url = get_template_directory_uri()."/";
?>

	    <!-- Fav and touch icons -->
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $template_url ?>images/ico/apple-touch-icon-144.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $template_url ?>images/ico/apple-touch-icon-114.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $template_url ?>images/ico/apple-touch-icon-72.png">
	    <link rel="apple-touch-icon-precomposed" href="<?php echo $template_url ?>images/ico/apple-touch-icon-57.png">
	    <link rel="shortcut icon" href="<?php echo $template_url ?>images/ico/favicon.png">

		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
		<!-- Animate.css -->
		<link rel="stylesheet" href="<?php echo $template_url ?>css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="<?php echo $template_url ?>css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo $template_url ?>css/bootstrap.css">
		<!-- Superfish -->
		<link rel="stylesheet" href="<?php echo $template_url ?>css/superfish.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

		<!-- Modernizr JS -->
		<script src="<?php echo $template_url ?>js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
<?php
	}

	function get_scripts(){

		$template_url = get_template_directory_uri()."/";
?>

	    <script src="<?php echo $template_url ?>js/jquery.min.js"></script>
	    <!-- jQuery Easing -->
	    <script src="<?php echo $template_url ?>js/jquery.easing.1.3.js"></script>
	    <!-- Bootstrap -->
	    <script src="<?php echo $template_url ?>js/bootstrap.min.js"></script>
	    <!-- Waypoints -->
	    <script src="<?php echo $template_url ?>js/jquery.waypoints.min.js"></script>
	    <!-- Stellar -->
	    <script src="<?php echo $template_url ?>js/jquery.stellar.min.js"></script>
	    <!-- Superfish -->
	    <script src="<?php echo $template_url ?>js/hoverIntent.js"></script>
	    <script src="<?php echo $template_url ?>js/superfish.js"></script>

	    <!-- Main JS (Do not remove) -->
	    <script src="<?php echo $template_url ?>js/main.js"></script>

	    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	    <script>
	        baguetteBox.run('.tz-gallery');
	    </script>

		<?php
			if ( is_page_template( 'contato.php' ) ) {  
	    ?>
				<script src="<?php echo $template_url ?>js/google_map.js"></script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3mtTeLoiaPLA5Ac6JxYzz4GPCepuIoSk&sensor=false" async defer></script>
		<?php
	        }
	}

 	/* Change the excerpt lenght */
	function excerpt_new_lenght($length) {
		return 30;
	}
	add_filter('excerpt_length', 'excerpt_new_lenght');

 	/* Removing Tags */
 	function myprefix_unregister_tags() {
	    unregister_taxonomy_for_object_type('post_tag', 'post');
	}
	add_action('init', 'myprefix_unregister_tags');

 	/* Hiding Help Box */
	function hide_help() {
	    echo '<style type="text/css">
	            #contextual-help-link-wrap { display: none !important; }
	          </style>';
	}
	add_action('admin_head', 'hide_help');

 	/* Adding Credits */
	function remove_footer_admin () {
	  	echo 'Desenvolvido por <a href="http://lucascraveiropaes.com" target="_blank">Lucas Craveiro Paes</a>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');

	/* Removing Comments for Good */
	add_action( 'admin_menu', 'my_remove_admin_menus' );
	function my_remove_admin_menus() {
	    remove_menu_page( 'edit-comments.php' );
	}
	add_action('init', 'remove_comment_support', 100);
	function remove_comment_support() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}
	function mytheme_admin_bar_render() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

	/* Removendo Logo do Wordpress */
	function custom_login_logo() {
      	echo '<style type="text/css">
            h1 a { background-image: url(' .get_bloginfo('template_directory').'/images/login.jpg) !important;}
            .login h1 a { width: 100%; -webkit-background-size: 100%; background-size: 100%;}
          </style>';
	}
	add_action('login_head', 'custom_login_logo');

	function bloglite_adminbar_logo() {
?>
   		<style type="text/css">
	      	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	         	content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bar.png') !important;
	         	top: 2px;
	         	width: 20px;
	      	}
	      	#wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
	         	pointer-events: none;
	         	cursor: default;
	      	} 
	   	</style>
<?php }
	add_action('wp_before_admin_bar_render', 'bloglite_adminbar_logo', 0);

	//Link na tela de login para a página inicial 
	function my_login_logo_url() {
	    return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );

	function my_login_logo_url_title() {
	    return 'Isotec Soluções - Sua Solução em Engenharia';
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );

	/* Adicionando Produtos */
	function produtos() {
		register_post_type( 'produtos',
			array(
					'labels' => array(
					'name' => 'Produtos',
					'all_items' => 'Todos os produtos',
					'singular_name' => 'Produto',
					'add_new' => 'Adicionar Produto',
					'add_new_item' => 'Adicionar Novo Produto',
					'edit' => 'Editar',
					'edit_item' => 'Editar Produto',
					'new_item' => 'Novo Produto',
					'view' => 'Ver',
					'view_item' => 'Ver Produto',
					'search_items' => 'Buscar Por Produtos',
					'not_found' => 'Não Foi Encontrado Nenhum Produto',
					'not_found_in_trash' => 'Não Foi Encontrado Nenhum Produto no lixo',
					'parent' => 'Pai - Produtos'
				),
			'public' => true,
			'menu_position' => 5,
			'rewrite' => array( 'slug' => 'produtos' ),
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
			'taxonomies' => array( '' ),
			'menu_icon' => 'dashicons-screenoptions',
			'has_archive' => true,
			)
		);
	}

	add_action( 'init', 'produtos');
?>