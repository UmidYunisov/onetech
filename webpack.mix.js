const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


/* Admin */

mix.styles([
	'resources/admin/bootstrap/css/bootstrap.min.css',
	'resources/admin/font-awesome/4.5.0/css/font-awesome.min.css',
	'resources/admin/ionicons/2.0.1/css/ionicons.min.css',
	'resources/admin/plugins/iCheck/minimal/_all.css',
	'resources/admin/plugins/datepicker/datepicker3.css',
	'resources/admin/plugins/select2/select2.min.css',
	'resources/admin/plugins/datatables/dataTables.bootstrap.css',
	'resources/admin/dist/css/AdminLTE.min.css',
	'resources/admin/dist/css/skins/_all-skins.min.css',
	'resources/admin/dist/css/style.css'
], 'public/css/admin.css');

mix.scripts([
	'resources/admin/plugins/jQuery/jquery-2.2.3.min.js',
	'resources/admin/bootstrap/js/bootstrap.min.js',
	'resources/admin/plugins/select2/select2.full.min.js',
	'resources/admin/plugins/datepicker/bootstrap-datepicker.js',
	'resources/admin/plugins/datatables/jquery.dataTables.min.js',
	'resources/admin/plugins/datatables/dataTables.bootstrap.min.js',
	'resources/admin/plugins/slimScroll/jquery.slimscroll.min.js',
	'resources/admin/plugins/fastclick/fastclick.js',
	'resources/admin/plugins/iCheck/icheck.min.js',
	'resources/admin/dist/js/app.min.js',
	'resources/admin/dist/js/demo.js',
	'resources/admin/dist/js/scripts.js'
], 'public/js/admin.js');

mix.copy('resources/admin/bootstrap/fonts', 'public/fonts');
mix.copy('resources/admin/dist/fonts', 'public/fonts');
mix.copy('resources/admin/dist/img', 'public/img/admin/');
mix.copy('resources/admin/plugins/iCheck/minimal/blue.png', 'public/css');


/* Front */

mix.styles([
	'resources/front/css/font-awesome.min.css',
	'resources/front/css/ionicons.min.css',
	'resources/front/css/linearicons.css',
	'resources/front/css/nice-select.css',
	'resources/front/css/jquery.fancybox.css',
	'resources/front/css/jquery-ui.min.css',
	'resources/front/css/meanmenu.min.css',
	'resources/front/css/nivo-slider.css',
	'resources/front/css/owl.carousel.min.css',
	'resources/front/css/bootstrap.min.css',
	'resources/front/css/default.css',
	'resources/front/style.css',
	'resources/front/css/responsive.css'
	
], 'public/css/app.css');

mix.js('resources/js/app.js', 'public/js')

mix.scripts([
	'resources/front/js/vendor/modernizr-3.5.0.min.js',
	'resources/front/js/vendor/jquery-3.2.1.min.js',
	'resources/front/js/jquery.countdown.min.js',
	'resources/front/js/jquery.meanmenu.min.js',
	'resources/front/js/jquery.scrollUp.js',
	'resources/front/js/jquery.nivo.slider.js',
	'resources/front/js/jquery.fancybox.min.js',
	'resources/front/js/jquery.nice-select.min.js',
	'resources/front/js/jquery-ui.min.js',
	'resources/front/js/owl.carousel.min.js',
	'resources/front/js/popper.min.js',
	'resources/front/js/bootstrap.min.js',
	'resources/front/js/plugins.js',
	'resources/front/js/main.js'
	], 'public/js/scripts.js');

