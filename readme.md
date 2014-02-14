#Laravel Boilerplate

##Introduction

The Laravel Boilerplate repository provides a simple [Laravel 4 PHP framework](http://laravel.com) setup including [Bower](http://bower.io) and [Grunt](http://gruntjs.org).

###Requirements

* Composer, http://getcomposer.org
* Bower, http://bower.io
* Grunt, http://gruntjs.org

###Installation

1. Download or <code>git clone</code> this repository
2. Run
 * <code>composer install</code>
 * <code>php artisan key:generate</code>
 * <code>bower install</code>
 * <code>npm install</code>

For further information on Laravel setup ( database configuration, ... ) please take a look at http://laravel.com.

##Usage

You can start developing immediately after installing the boilerplate.

1. Run <code>grunt work</code> on your command line
2. Open http://your-url-to-laravel.local
3. Modify some CSS or JS files located within your <i>assets/css</i> or <i>assets/js</i> directory and watch the frontend change automatically due to <b>livereload</b>

###How it works

Described in a nutshell, the approach of this laravel development setup is, that all resources ( *.css, *.js, ... ) from third party libraries as well as your own resources are stored within the restricted non-public <i>assets/</i> directory.

All files available or required within the web application are compiled, built or just copied to the public directory using tools such as <i>Grunt</i>.

This allows you as a developer, working on your source files without the need to care about modifying JavaScript or CSS file inclusions, when deploying your application.

####An example

Let's assume you as a developer would like to add an additional library to work with. In order to show how easy you can do so, here's an example of how to integrate [UnderscoreJS](http://underscorejs.org) within your laravel project.

1. Install the package and add it to the <i>bower.json</i> file:

  <code>bower install --save underscore</code>

2. Add the <i>underscore.js</i> source file to the target task within the <i>grunt/concat.js</i> configuration file:
		// JS file concatenation
        js_frontend: {
        	options: {
            	separator: ';'
        	},
        	src: [
            	'bower_components/jquery/jquery.js',
           	 	'bower_components/underscore/underscore.js',
            	'assets/js/frontend.js'
	        ],
    	    dest: 'public/assets/js/frontend.js'
    	},

3. Run the <code>grunt work</code> task to start developing with the new package installed.

##Thanks to

[Elena Kolevska](https://github.com/elena-kolevska/grunt-laravel) and [Benjamin Ulmer](https://github.com/remluben/laravel-boilerplate) who inspired me with their [Laravel Grunt](https://github.com/elena-kolevska/grunt-laravel) and [laravel-boilerplate](https://github.com/remluben/laravel-boilerplate) projects.

[Paul Bakaus](http://www.html5rocks.com/profiles/#paulbakaus) who inspired me with his excellent [blog article](http://www.html5rocks.com/en/tutorials/tooling/supercharging-your-gruntfile).

And of course, I would like to thank all Laravel Framework developers, that made up this great [framework](https://github.com/laravel/laravel).

