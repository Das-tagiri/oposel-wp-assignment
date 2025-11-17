<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
    /* Preloader inline fallback styles to avoid FOUC */
    #toposel-preloader { position:fixed; inset:0; display:flex; align-items:center; justify-content:center; background:#fff; z-index:99999; transition:opacity .5s ease, visibility .5s; }
    #toposel-preloader .spinner { width:68px; height:68px; border-radius:50%; background:linear-gradient(135deg,#000,#444); animation:spin 1.1s linear infinite; box-shadow:0 6px 20px rgba(0,0,0,0.12); }
    @keyframes spin { 0%{ transform:rotate(0deg);}100%{transform:rotate(360deg);} }
    .preloader-hidden { opacity:0; visibility:hidden; pointer-events:none; }
    </style>
</head>
<body <?php body_class(); ?>>
<!-- Preloader -->
<div id="toposel-preloader"><div class="spinner" aria-hidden="true"></div></div>

<header class="site-header" style="position:sticky;top:0;z-index:10;background:transparent;padding:10px 14px;">
    <div style="display:flex;align-items:center;justify-content:space-between">
        <div class="site-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;color:#111;font-weight:700;font-size:16px;">
                <?php bloginfo('name'); ?>
            </a>
        </div>

        <div style="display:flex;align-items:center;gap:10px;">
            <!-- Dark mode toggle -->
            <button id="dark-mode-toggle" aria-label="Toggle dark mode" style="background:transparent;border:0;cursor:pointer;padding:8px;border-radius:8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" fill="#111"/>
                </svg>
            </button>
        </div>
    </div>
</header>
