'use strict';
 
var
  LIVERELOAD_PORT = 35729,
  lrSnippet = require('connect-livereload')({ port: LIVERELOAD_PORT }),
  mountFolder = function( connect, dir ) {
    return connect.static(require('path').resolve(dir));
  };
 
module.exports = function( grunt ) {
 
  // load all grunt tasks
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-open');
  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.initConfig({
    less: {
      development: {
        options: {
          // compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          // target.css file: source.less file
          "css/basecamp.css": "less/basecamp.less",
          "css/basecamp-only-icons.css" : "less/basecamp-only-icons.less",
          "css/basecamp-only-buttons.css" : "less/basecamp-only-buttons.less",
          "css/basecamp-legacy-header-footer-progressive.css" : "less/basecamp-legacy-header-footer-progressive.less",
          "css/basecamp-legacy-header-footer.css" : "less/basecamp-legacy-header-footer.less",
          "css/basecamp-no-header-footer.css" : "less/basecamp-no-header-footer.less"
        }
      }
    },
    watch: {
      livereload: {
        files: [
          '{,*/}*.html',
          'static/{,*/}*.{css,js,png,jpg,gif,svg}'
        ],
        // tasks: ['less'],
        options: {
          livereload: LIVERELOAD_PORT
        }
      }
    },
    styles: {
        files: ['less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
    },
    connect: {
      options: {
        port: 9000,
        hostname: '0.0.0.0'
      },
      livereload: {
        options: {
          middleware: function( connect ) {
            return [
              lrSnippet,
              mountFolder(connect, './')
            ];
          }
        }
      }
    },
    open: {
      server: {
        url: 'http://localhost:<%= connect.options.port %>'
      }
    }
  });
 
  grunt.registerTask('server', function() {
    grunt.task.run([
      'connect:livereload',
      'open',
      'watch'
    ]);
  });
 
  grunt.registerTask('default', [ 'server', 'less' ]);
  // grunt.registerTask('styles', ['less']);
};