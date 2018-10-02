requirejs.config({
	baseUrl: requireJsBasePath,
	paths: {
		'jquery': '/typo3/sysext/core/Resources/Public/JavaScript/Contrib/jquery/jquery-3.2.1.min',
		'TYPO3/CMS/In2studyfinder': '/typo3conf/ext/in2studyfinder/Resources/Public/JavaScript'
	},
	'shim': {
		'select2': {
			deps: ['jquery'],
			exports: '$.select2'
		}
	}
});

define(['TYPO3/CMS/In2studyfinder/Frontend'], function(Frontend) {
	'use strict';
	Frontend.initialize();
});
