'use strict';
module.exports = function (grunt) {
  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);
  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);
  // Define the configuration for all the tasks
  grunt.initConfig({

    less: {
      development: {
        files: {
          'production/production.css': 'less/main.less' 
        }
      }
    },

    // Prefixer

    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 8', 'ie 9']
      },
      files: {
        src: 'production/production.css',
        dest: 'production/production.css'
      }
    },
    concat: {
      options: {
        separator: grunt.util.linefeed + ';' + grunt.util.linefeed,
      },
      dist: {
        src: [
          'bower_components/bootstrap/dist/js/bootstrap.min.js',
          'js/script.js'
         ],
        dest: 'production/production.js',
      },
    },

    //minify css

    cssmin: {
      minify: {
        src: 'production/production.css',
        dest: 'production/production.css'
      }
    },

    // watch task

    watch: {
      scripts: {
        files: ['js/{,*/}*.js'],
        tasks: ['concat'],
        options: {
          spawn: false
        }
      },
      css: {
        files: ['less/{,*/}*.less'],
        tasks: ['less','autoprefixer','cssmin']
      }
    }
  });

  grunt.registerTask('serve',[
    'watch'
  ]);
  grunt.registerTask('build', [
    'concat','less','autoprefixer','cssmin'
  ]);
};