<?php global $post; wp_head(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KLX7837J5P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KLX7837J5P');
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<body <?php body_class(); ?> id="body__<?php if (!is_archive()): echo $post->post_name; else: echo strip_tags(get_the_archive_title()); endif; ?>">
<header class="container-fluid" id="header">
    <div class="row middle-xs header-row">
        <div class="col-xs-6 logo-col">
            <a href="/">
            <img decoding="async" src="/wp-content/uploads/2022/12/Landover-Dental-Associates__crop.png" alt="Landover Dental Associates" width="250">
            </a>
        </div>
        <div class="col-xs-6 end-xs menu-col">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </div>
</header>