module.exports = function (grunt) {
	'use strict';

	// Project configuration.
	grunt.initConfig({

		// Metadata.
		pkg: grunt.file.readJSON('package.json'),


		less: {
			development: {
				options: {
					paths: ["../inc/css"]
				},
				files: {
					"../inc/css/compiled.css": "../inc/css/less/nake-benehime.less"
				}
			},
			production: {
				options: {
					paths: ["assets/css"],
					cleancss: true,
					modifyVars: {
						imgPath: '"http://mycdn.com/path/to/images"',
						bgColor: 'red'
					}
				},
				files: {
					"path/to/result.css": "path/to/source.less"
				}
			}
		},

		watch: {
			less: {
				files: '../inc/css/less/*.less',
				tasks: 'less:development'
			}
		}

	}); //end grunt.initConfig()

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');



};