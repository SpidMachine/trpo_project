<?php

require_once "../../connect.php";

$id = $_GET['id'];

$teacher_info = mysqli_query($link, "SELECT * FROM `teachers` WHERE `id` = '$id'");
$teacher_info = mysqli_fetch_assoc($teacher_info);

?>

<!DOCTYPE html>
<html class="html" lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>TRPO</title>
    <meta name='robots' content='noindex, nofollow'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='dns-prefetch' href='//s.w.org'>
    <link rel="alternate" type="application/rss+xml" title="TRPO &raquo; Лента" href="../../feed/index.htm">
    <link rel="alternate" type="application/rss+xml" title="TRPO &raquo; Лента комментариев"
          href="../../comments/feed/index.htm">
    <link rel="stylesheet" href="../../styles/teacher_info_style.css">
    <link rel="stylesheet" href="../../styles/mainStyle.css.css">
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/trpo\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.2"}
        };
        /*! This file is auto-generated */
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='../../wp-includes/css/dist/block-library/style.min.css?ver=6.0.2'
          media='all'>
    <style id='wp-block-library-theme-inline-css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation, .wp-block-pullquote cite, .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite, .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large, .wp-block-quote.is-style-large, .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td, .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='font-awesome-css'
          href='../../wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css?ver=5.15.1' media='all'>
    <link rel='stylesheet' id='simple-line-icons-css'
          href='../../wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css?ver=2.4.0' media='all'>
    <link rel='stylesheet' id='oceanwp-style-css'
          href='../../wp-content/themes/oceanwp/assets/css/style.min.css?ver=3.3.5'
          media='all'>
    <link rel='stylesheet' id='elementor-icons-css'
          href='../../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0'
          media='all'>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='../../wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.7.4' media='all'>
    <link rel='stylesheet' id='elementor-post-8-css'
          href='../../wp-content/uploads/elementor/css/post-8.css?ver=1663778428'
          media='all'>
    <link rel='stylesheet' id='elementor-pro-css'
          href='../../wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.7.5' media='all'>
    <link rel='stylesheet' id='elementor-global-css'
          href='../../wp-content/uploads/elementor/css/global.css?ver=1663779330'
          media='all'>
    <link rel='stylesheet' id='elementor-post-5-css'
          href='../../wp-content/uploads/elementor/css/post-5.css?ver=1663780314'
          media='all'>
    <link rel='stylesheet' id='oe-widgets-style-css'
          href='../../wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=6.0.2' media='all'>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='../../css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CVidaloka%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;subset=cyrillic&#038;ver=6.0.2'
          media='all'>
    <script src='../../wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script src='../../wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="../../wp-json/index.htm">
    <link rel="alternate" type="application/json" href="../../wp-json/wp/v2/pages/5">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.0.2">
    <link rel="canonical" href="../../mainIndex.php">
    <link rel='shortlink' href='../../mainIndex.php'>
    <link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftrpo%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="../../wp-json/oembed/1.0/embed-1?url=http%3A%2F%2Ftrpo%2F&#038;format=xml">
    <!-- OceanWP CSS -->
    <style type="text/css">
        /* Header CSS */
        #site-header.has-header-media .overlay-header-media {
            background-color: rgba(0, 0, 0, 0.5)
        }

        .table_blur {
            background: #f5ffff;
            border-collapse: collapse;
            text-align: left;
        }

        .table_blur th {
            border-top: 1px solid #777777;
            border-bottom: 1px solid #777777;
            box-shadow: inset 0 1px 0 #999999, inset 0 -1px 0 #999999;
            background: linear-gradient(#9595b6, #5a567f);
            color: white;
            padding: 10px 15px;
            position: relative;
        }

        .table_blur th:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 25%;
            height: 25%;
            width: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, .08));
        }

        .table_blur tr:nth-child(odd) {
            background: #ebf3f9;
        }

        .table_blur th:first-child {
            border-left: 1px solid #777777;
            border-bottom: 1px solid #777777;
            box-shadow: inset 1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }

        .table_blur th:last-child {
            border-right: 1px solid #777777;
            border-bottom: 1px solid #777777;
            box-shadow: inset -1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }

        .table_blur td {
            border: 1px solid #e3eef7;
            padding: 10px 15px;
            position: relative;
            transition: all 0.5s ease;
        }

        .table_blur tbody:hover td {
            color: transparent;
            text-shadow: 0 0 3px #a09f9d;
        }

        .table_blur tbody:hover tr:hover td {
            color: #444444;
            text-shadow: none;
        }
    </style>
</head>

<body class="home page-template-default page page-id-5 wp-embed-responsive oceanwp-theme dropdown-mobile default-breakpoint content-full-screen page-header-disabled has-breadcrumbs elementor-default elementor-kit-8 elementor-page elementor-page-5"
      itemscope="itemscope" itemtype="https://schema.org/WebPage">

<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>

<div id="outer-wrap" class="site clr">

    <a class="skip-link screen-reader-text" href="#main">Перейти к содержимому</a>


    <div id="wrap" class="clr">


        <main id="main" class="site-main clr" role="main">


            <div id="content-wrap" class="container clr">


                <div id="primary" class="content-area clr">


                    <div id="content" class="site-content clr">


                        <article class="single-page-article clr">


                            <div class="entry clr" itemprop="text">


                                <div data-elementor-type="wp-page" data-elementor-id="5" class="elementor elementor-5">
                                    <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-6b20e447 elementor-section-height-full elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                            data-id="6b20e447" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-wider" style="align-items: start">
                                            <div class="container">
                                                <div class="buttons_above_the_table_teacher">
                                                    <form action="table_teachers.php" method="post" style="display: flex;
    justify-content: end;">
                                                        <label>
                                                            <input style="display: none" name="user"
                                                                   id="user"
                                                                   type="text"
                                                                   value="root">
                                                        </label>
                                                        <label>
                                                            <input style="display: none" name="password"
                                                                   id="password"
                                                                   type="password"
                                                                   value="root">
                                                        </label>
                                                        <a href="#">
                                                            <button
                                                                    id="sub"
                                                                    class="button_back"
                                                                    name="wp-submit">
                                                                <span class="elementor-button-text">Вернуться назад</span>
                                                            </button>
                                                        </a>
                                                    </form>
                                                </div>
                                                <div class="container_card">
                                                    <div class="teacher_header_card">
                                                        <div class="teacher_picture">
                                                            <img src="../../images/images.jpg">
                                                        </div>
                                                        <div class="description">
                                                            <div class="teacher_name">
                                                                <h1><?= $teacher_info['FIO'] ?></h1>
                                                            </div>
                                                            <div>
                                                                <table class="table_info_teacher">
                                                                    <tr>
                                                                        <td>
                                                                            <span style="font-weight: bolder">Должность:</span>
                                                                        </td>
                                                                        <td>
                                                                            <?= $teacher_info['position'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span style="font-weight: bolder">Специальность:</span>
                                                                        </td>
                                                                        <td>
                                                                            <?= $teacher_info['speciality'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span style="font-weight: bolder">Квалификационная категория:</span>
                                                                        </td>
                                                                        <td>
                                                                            <?= $teacher_info['category'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span style="font-weight: bolder">Стаж [год/года/лет]:</span>
                                                                        </td>
                                                                        <td>
                                                                            <?= $teacher_info['experience'] ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </div>
                            </div>


                    </div>

                    </article>


                </div><!-- #content -->


            </div><!-- #primary -->


    </div><!-- #content-wrap -->


    </main><!-- #main -->


</div><!-- #wrap -->


</div><!-- #outer-wrap -->


<a aria-label="Перейти наверх страницы" href="#" id="scroll-top" class="scroll-top-right"><i class=" fa fa-angle-up"
                                                                                             aria-hidden="true"
                                                                                             role="img"></i></a>


<link rel='stylesheet' id='e-animations-css'
      href='../../wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.7.4' media='all'>
<script src='../../wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script id='oceanwp-main-js-extra'>
    var oceanwpLocalize = {
        "nonce": "a6eff16672",
        "isRTL": "",
        "menuSearchStyle": "drop_down",
        "mobileMenuSearchStyle": "disabled",
        "sidrSource": null,
        "sidrDisplace": "1",
        "sidrSide": "left",
        "sidrDropdownTarget": "link",
        "verticalHeaderTarget": "link",
        "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select",
        "ajax_url": "http:\/\/trpo\/wp-admin\/admin-ajax.php"
    };
</script>
<script src='../../wp-content/themes/oceanwp/assets/js/theme.min.js?ver=3.3.5' id='oceanwp-main-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/drop-down-mobile-menu.min.js?ver=3.3.5'
        id='oceanwp-drop-down-mobile-menu-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/drop-down-search.min.js?ver=3.3.5'
        id='oceanwp-drop-down-search-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/vendors/magnific-popup.min.js?ver=3.3.5'
        id='ow-magnific-popup-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/ow-lightbox.min.js?ver=3.3.5' id='oceanwp-lightbox-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/vendors/flickity.pkgd.min.js?ver=3.3.5'
        id='ow-flickity-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/ow-slider.min.js?ver=3.3.5' id='oceanwp-slider-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/scroll-effect.min.js?ver=3.3.5'
        id='oceanwp-scroll-effect-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/scroll-top.min.js?ver=3.3.5' id='oceanwp-scroll-top-js'></script>
<script src='../../wp-content/themes/oceanwp/assets/js/select.min.js?ver=3.3.5' id='oceanwp-select-js'></script>
<script src='../../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.5'
        id='elementor-pro-webpack-runtime-js'></script>
<script src='../../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.7.4'
        id='elementor-webpack-runtime-js'></script>
<script src='../../wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.7.4'
        id='elementor-frontend-modules-js'></script>
<script src='../../wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
<script src='../../wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='../../wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
<script src='../../wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});
</script>
<script id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "http:\/\/trpo\/wp-admin\/admin-ajax.php",
        "nonce": "8d2f22be00",
        "urls": {
            "assets": "http:\/\/trpo\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "http:\/\/trpo\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"}
        },
        "facebook_sdk": {"lang": "ru_RU", "app_id": ""},
        "lottie": {"defaultAnimationUrl": "http:\/\/trpo\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
</script>
<script src='../../wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.7.5'
        id='elementor-pro-frontend-js'></script>
<script src='../../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
<script src='../../wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Facebook",
            "shareOnTwitter": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Twitter",
            "pinIt": "\u0417\u0430\u043f\u0438\u043d\u0438\u0442\u044c",
            "download": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c",
            "downloadImage": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435",
            "fullscreen": "\u0412\u043e \u0432\u0435\u0441\u044c \u044d\u043a\u0440\u0430\u043d",
            "zoom": "\u0423\u0432\u0435\u043b\u0438\u0447\u0435\u043d\u0438\u0435",
            "share": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f",
            "playVideo": "\u041f\u0440\u043e\u0438\u0433\u0440\u0430\u0442\u044c \u0432\u0438\u0434\u0435\u043e",
            "previous": "\u041d\u0430\u0437\u0430\u0434",
            "next": "\u0414\u0430\u043b\u0435\u0435",
            "close": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442 \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "\u041d\u043e\u0443\u0442\u0431\u0443\u043a",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "\u0428\u0438\u0440\u043e\u043a\u043e\u0444\u043e\u0440\u043c\u0430\u0442\u043d\u044b\u0435",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.4",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "theme_builder_v2": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true,
            "page-transitions": true,
            "notes": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {"assets": "http:\/\/trpo\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {"id": 5, "title": "TRPO", "excerpt": "", "featuredImage": false}
    };
</script>
<script src='../../wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.7.4'
        id='elementor-frontend-js'></script>
<script src='../../wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.7.5'
        id='pro-elements-handlers-js'></script>
</body>
</html>
