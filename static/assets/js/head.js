(function() {
	$.fn.header = (function() {
		var self = this;
		var url = 'http://phongkhamapollo.com/public/assets/';
		var cssArr = [
			'css/reset.css',
			'css/bootstrap.css',
			'css/bootstrap-theme.css',
			'css/font-awesome.css',
			'css/modern-business.css',
			'css/jquery-ui.css',
			'css/loader.css',
			'css/animate.css',
			'css/modern-business.css'
		];
		var scriptArr = [
			'js/menu.js',
			'js/jquery.mmenu.js',
			'js/bootstrapValidator.js',
			'js/modernizr.js',
			'js/underscore.js',
			'js/scriptCheckError.js',
			'js/animateHomeMenu.js',
			'js/phoneMenuItem.js',
			'js/general.js',
		];
		var funcs = {};
		funcs.init = function() {
			/** drag browser */
			var prepend 				= [];
			var metaCompatible 			= document.createElement('meta');
			metaCompatible.httpEquiv 	= 'X-UA-Compatible';
			metaCompatible.content 		= 'IE=edge';
			prepend.push(metaCompatible);
			/** multi device */
			var metaScale 				= document.createElement('meta');
			metaScale.name 				= 'viewport';
			metaScale.content 			= 'width=device-width, initial-scale=1';
			prepend.push(metaScale);
			var metaLang 				= document.createElement('meta');
			metaLang.httpEquiv 			= 'content-language';
			metaLang.content 			= 'vi';
			prepend.push(metaLang);
			var ico 				= document.createElement('link');
			ico.rel 				= 'shortcut icon';
			ico.href 				= 'http://phongkhamapollo.com/public/assets/images/ico/pk-logo.ico';
			ico.type				= 'image/x-icon';
			prepend.push(ico);
			var altLink 			= document.createElement('link');
			altLink.rel 				= 'alternate';
			altLink.href 				= 'http://phongkhamapollo.com';
			altLink.hreflang			= 'vi-vn';
			prepend.push(altLink);
			var meta_dc_created 				= document.createElement('meta');
			meta_dc_created.name 				= 'dc.created';
			meta_dc_created.content 			= '2015-09-06';
			prepend.push(meta_dc_created);
			var meta_visit 				= document.createElement('meta');
			meta_visit.name 			= 'revisit-after';
			meta_visit.content 			= '1 days';
			prepend.push(meta_visit);
			var meta_lang				= document.createElement('meta');
			meta_lang.name 				= 'language';
			meta_lang.content 			= 'Vietnamese';
			prepend.push(meta_lang);
			var meta_creator_email		= document.createElement('meta');
			meta_creator_email.name 	= 'dc.creator.email';
			meta_creator_email.content 	= 'phongkhamapollo@gmail.com';
			prepend.push(meta_creator_email);
			var meta_identifier			= document.createElement('meta');
			meta_identifier.name 		= 'dc.identifier';
			meta_identifier.content 	= 'http://phongkhamapollo.com/';
			prepend.push(meta_identifier);
			var meta_language			= document.createElement('meta');
			meta_language.name 			= 'dc.language';
			meta_language.content 		= 'vi-VN';
			prepend.push(meta_language);
			var meta_geo_position		= document.createElement('meta');
			meta_geo_position.name 		= 'geo.position';
			meta_geo_position.content 	= '20.995733, 105.842902';
			prepend.push(meta_geo_position);
			var meta_geo_placename		= document.createElement('meta');
			meta_geo_placename.name 	= 'geo.placename';
			meta_geo_placename.content 	= 'TP.HCM, Hà Nội';
			prepend.push(meta_geo_placename);
			var meta_geo_region			= document.createElement('meta');
			meta_geo_region.name 		= 'geo.region';
			meta_geo_region.content 	= 'VN-65';
			prepend.push(meta_geo_region);
			prepend.reverse();
			$.each(prepend, function(index,value) {
				$('head').prepend(value);
			});
		};
		funcs.loadCss = function() {
			for (var href in cssArr) {
				var link 	= document.createElement('link');
				link.type 	= 'text/css';
				link.rel 	= 'stylesheet';
				link.href 	= url + cssArr[href];   
				document.getElementsByTagName('head')[0].appendChild(link);
			}
		};
		funcs.loadJS = function() {
			for (var src in scriptArr) {
				var script = document.createElement('script');
				script.type = 'text/javascript';
				script.src = url + scriptArr[src];   
				$('body').append(script);
			}
		};
		funcs.setTitle = function(title) {
			var tt = document.createElement('title');
			tt.text = title;
			$('head').find('meta[charset]').next().prepend(tt);
		};
		funcs.setStyle = function() {
			/** general delete */
			var link 	= document.createElement('link');
			link.type 	= 'text/css';
			link.rel 	= 'stylesheet';
			link.href 	= 'static/assets/css/style.css';   
			document.getElementsByTagName('head')[0].appendChild(link);
			/** end part delete */
		};
		/**
		options = {
			alias 			: alias,
			keyword 		: keyword,
			title 			: title,
			smallimage 		: smallimage,
			description 	: description,
			summary 		: summary
		}
		*/
		funcs.complete = function(options) {
			var def = {
				alias 			: '',
				url 			: 'http://phongkhamapollo.com/',
				keywords 		: 'phong kham da khoa apollo, phòng khám đa khoa apollo, phong kham apollo, phòng khám apollo',
				title 			: 'Phòng Khám Đa Khoa APOLLO',
				smallimage 		: '',
				description 	: 'Phòng Khám Đa Khoa apollo với các thiết bị y tế hiện đại, phong cách phục vụ chuyên nghiệp hy vọng sẽ góp phần giúp cho tất cả mọi người luôn có một sức khỏe tốt.',
				summary 		: '',
			};
			if(jQuery.isEmptyObject(options)) {
				options.alias 		= def.alias;
				options.url 		= def.url;
				options.keywords 	= def.keywords;
				options.title 		= def.title;
				options.smallimage 	= def.smallimage;
				options.description = def.description;
				options.summary 	= def.summary;
			}
			var append = [];
			var meta_keyword			= document.createElement('meta');
			meta_keyword.name 			= 'keywords';
			meta_keyword.content 		= options.keywords;
			append.push(meta_keyword);
			var meta_description		= document.createElement('meta');
			meta_description.name 		= 'description';
			meta_description.content 	= options.description;
			append.push(meta_description);
			var meta_dc_description		= document.createElement('meta');
			meta_dc_description.name 	= 'dc.description';
			meta_dc_description.content = options.description;
			append.push(meta_dc_description);
			var meta_dc_keywords		= document.createElement('meta');
			meta_dc_keywords.name 		= 'dc.keywords';
			meta_dc_keywords.content 	= options.keywords;
			append.push(meta_dc_keywords);
			var meta_og_site_name		= document.createElement('meta');
			meta_og_site_name.property 	= 'og:site_name';
			meta_og_site_name.content 	= options.title;
			append.push(meta_og_site_name);
			var meta_og_type			= document.createElement('meta');
			meta_og_type.property 		= 'og:type';
			meta_og_type.content 		= 'article';
			append.push(meta_og_type);
			var meta_og_url				= document.createElement('meta');
			meta_og_url.property 		= 'og:url';
			meta_og_url.content 		= options.url;
			append.push(meta_og_url);
			var meta_og_locale			= document.createElement('meta');
			meta_og_locale.property 	= 'og:locale';
			meta_og_locale.content 		= 'vi_VN';
			append.push(meta_og_locale);
			var meta_og_title			= document.createElement('meta');
			meta_og_title.property 		= 'og:title';
			meta_og_title.content 		= options.description;
			append.push(meta_og_title);
			var meta_og_description		= document.createElement('meta');
			meta_og_description.property= 'og:description';
			meta_og_description.content = options.description;
			append.push(meta_og_description);
			var meta_og_image			= document.createElement('meta');
			meta_og_image.property		= 'og:image';
			meta_og_image.content 		= options.smallimage;
			meta_og_image.itemprop 		= 'image';
			append.push(meta_og_image);
			var link_canonical			= document.createElement('link');
			link_canonical.rel			= 'canonical';
			link_canonical.href 		= options.url;
			append.push(link_canonical);
			var meta_itemprop_name		= document.createElement('meta');
			meta_itemprop_name.itemprop	= 'name';
			meta_itemprop_name.content 	= options.description;
			append.push(meta_itemprop_name);
			var meta_itemprop_description		= document.createElement('meta');
			meta_itemprop_description.itemprop	= 'description';
			meta_itemprop_description.content 	= options.description;
			append.push(meta_itemprop_description);	
			funcs.setTitle(options.title);
			$.each(append, function(index,value) {
				$('head').append(value);
			});
			$('head').append('<html itemscope itemtype="http://schema.org/Article">');
		};
		funcs.ga = function() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.text = "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55814151-1', 'auto');ga('send', 'pageview');";
			$('head').append(script);
		};
		return funcs;
	}());
})(jQuery);


