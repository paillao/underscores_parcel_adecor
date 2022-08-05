<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_parcel
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <script>
      document.documentElement.className = "js";
      var supportsCssVars = function () {
        var e,
          t = document.createElement("style");
        return (
          (t.innerHTML = "root: { --tmp-var: bold; }"),
          document.head.appendChild(t),
          (e = !!(
            window.CSS &&
            window.CSS.supports &&
            window.CSS.supports("font-weight", "var(--tmp-var)")
          )),
          t.parentNode.removeChild(t),
          e
        );
      };
      supportsCssVars() ||
        alert(
          "Please view this demo in a modern browser that supports CSS Variables."
        );
    </script>
    
	<?php wp_head(); ?>
</head>

<body <?php body_class("loading"); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
