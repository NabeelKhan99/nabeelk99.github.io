<?php

$pageFilename = explode('.php', $_SERVER['PHP_SELF'])[0];
$site = require 'config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $page->title; ?></title>
    <meta name="description" content="<?= $page->description; ?>" />
    <meta name="robots" content="max-image-preview:large" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="<?= $site->name; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $page->title; ?>" />
    <meta property="og:description" content="<?= $page->description; ?>" />
    <meta property="og:url" content="<?= $site->url; ?>" />
    <meta property="og:image" content="<?= $site->url; ?>/wp-content/uploads/2023/09/CIBEDTECHlogo-png-2.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= $page->title; ?>" />
    <meta name="twitter:description" content="<?= $page->description; ?>" />

    <link rel="icon" type="image/x-icon" href="<?= $site->url; ?>/wp-content/uploads/2023/09/CIBEDTECHlogo-png-2.png">
    <link rel='dns-prefetch' href='//cdn.datatables.net' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext":".png", "svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt":".svg", "source":{"concatemoji":"https://cibedtech.com/wp-includes/js/wp-emoji-release.min.js?ver=6.4.2"}};
        /*! This file is auto-generated */
        !function(i, n){var o, s, e; function c(e){try{var t = {supportTests:e, timestamp:(new Date).valueOf()}; sessionStorage.setItem(o, JSON.stringify(t))} catch (e){}}function p(e, t, n){e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function(e, t){return e === r[t]})}function u(e, t, n){switch (t){case"flag":return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case"emoji":return!n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e, t, n){var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope?new OffscreenCanvas(300, 150):i.createElement("canvas"), a = r.getContext("2d", {willReadFrequently:!0}), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function(e){o[e] = t(a, e, n)}), o}function t(e){var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t)}"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {everything:!0, everythingExceptFlag:!0}, e = new Promise(function(e){i.addEventListener("DOMContentLoaded", e, {once:!0})}), new Promise(function(t){var n = function(){try{var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)return e.supportTests} catch (e){}return null}(); if (!n){if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)try{var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], {type:"text/javascript"}), a = new Worker(URL.createObjectURL(r), {name:"wpTestEmojiSupports"}); return void(a.onmessage = function(e){c(n = e.data), a.terminate(), t(n)})} catch (e){}c(n = f(s, u, p))}t(n)}).then(function(e){for (var t in e)n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function(){n.DOMReady = !0}}).then(function(){return e}).then(function(){var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji?t(e.concatemoji):e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))}))}((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocksa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-active-filters-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/active-filtersa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-add-to-cart-form-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/add-to-cart-forma504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-packages-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/packages-stylea504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-all-products-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-productsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-all-reviews-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-reviewsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-attribute-filter-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/attribute-filtera504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-breadcrumbs-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/breadcrumbsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-catalog-sorting-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/catalog-sortinga504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-customer-account-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/customer-accounta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-featured-category-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-categorya504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-featured-product-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-producta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-mini-cart-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-carta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-price-filter-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/price-filtera504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-add-to-cart-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-add-to-carta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-button-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-buttona504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-categories-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-categoriesa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-image-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-imagea504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-image-gallery-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image-gallerya504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-query-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-querya504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-results-count-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-results-counta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-reviews-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-reviewsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-sale-badge-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sale-badgea504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-search-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-searcha504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-sku-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-skua504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-stock-indicator-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-stock-indicatora504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-summary-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-summarya504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-title-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-titlea504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-rating-filter-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/rating-filtera504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-reviews-by-category-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-categorya504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-reviews-by-product-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-producta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-details-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-detailsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-single-product-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/single-producta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-stock-filter-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stock-filtera504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-cart-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/carta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-checkout-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/checkouta504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-mini-cart-contents-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart-contentsa504.css?ver=10.6.6' type='text/css' media='all' />
    <link rel='stylesheet' id='redux-extendify-styles-css' href='wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities4235.css?ver=4.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles41a3.css?ver=5.8' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout7f40.css?ver=8.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen7f40.css?ver=8.0.3' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce7f40.css?ver=8.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/plugins/rselements/assets/css/bootstrap.min1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='wp-content/plugins/rselements/assets/css/magnific-popup1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-latest-css' href='wp-content/plugins/rselements/assets/css/fontawesome1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='wp-content/plugins/rselements/assets/css/slick1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='materialize-css' href='wp-content/plugins/rselements/assets/css/materialize1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css' href='wp-content/plugins/rselements/assets/css/slick-theme1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='brands-css' href='wp-content/plugins/rselements/assets/css/brands1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='solid-css' href='wp-content/plugins/rselements/assets/css/solid1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rsaddons-floaticon-css' href='wp-content/plugins/rselements/assets/fonts/flaticon1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='headding-title-css' href='wp-content/plugins/rselements/assets/css/headding-title1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='dataTables-css' href='../cdn.datatables.net/1.10.20/css/jquery.dataTables.min1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rsaddons-pro-css' href='wp-content/plugins/rselements/assets/css/rsaddons1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='boostrap-css' href='wp-content/themes/braintech/assets/css/bootstrap.min1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-all-css' href='wp-content/themes/braintech/assets/css/font-awesome.min.all1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/braintech/assets/css/flaticon1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css' href='wp-content/themes/braintech/assets/css/owl.carousel1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='braintech-style-default-css' href='wp-content/themes/braintech/assets/css/default1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='braintech-style-custom-css' href='wp-content/themes/braintech/assets/css/custom1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='braintech-style-responsive-css' href='wp-content/themes/braintech/assets/css/responsive1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='braintech-style-css' href='wp-content/themes/braintech/style1e39.css?ver=6.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='studio-fonts-css' href='//fonts.googleapis.com/css?family=Livvic%3A100%2C300%2C400%2C500%2C600%2C700%2C900%26display%3Dswap&#038;ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind618.css?ver=5.21.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.minb73d.css?ver=3.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css' href='wp-content/uploads/elementor/css/post-7a1c6.css?ver=1693676686' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/globala1c6.css?ver=1693676686' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-12886-css' href='wp-content/uploads/elementor/css/post-128862dfd.css?ver=1693686955' type='text/css' media='all' />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Livvic:100,200,300,400,500,600,700,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,900italic&#038;display=swap&#038;ver=1693682375" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Livvic:100,200,300,400,500,600,700,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,900italic&#038;display=swap&#038;ver=1693682375" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Livvic:100,200,300,400,500,600,700,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,900italic&#038;display=swap&#038;ver=1693682375" /></noscript><link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="alternate" type="text/xml+oembed" href="/wp-json/oembed/1.0/embed3eb9?url=<?= $site->url; ?>p;format=xml" />
    <script>
        function setREVStartSize(e){
        //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
            else{
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0)? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
            var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
            var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
            newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
            }
            } catch (e){
            console.log("Failure at Presize of Slider:" + e)
            }
            //});
    };
    </script>
    <link href="<?= sprintf('/styles%s.css', $pageFilename); ?>" rel="stylesheet" type="text/css"/>
</head>