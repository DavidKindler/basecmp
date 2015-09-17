'use strict';

var LIVERELOAD_PORT = 35729,
  lrSnippet = require('connect-livereload')({
    port: LIVERELOAD_PORT
  }),
  mountFolder = function(connect, dir) {
    return connect.static(require('path').resolve(dir));
  };

module.exports = function(grunt) {

  // load all grunt tasks
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-open');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-uncss');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-compress');

  grunt.initConfig({
    compress: {
      less: {
        options: {
          archive: 'resources/less.zip'
        },
        files: [
          // {src: ['less/*'], dest: 'resources/', filter: 'isFile'},
          {expand:true,flatten: true, src: 'less/**',filter:'isFile'}
        ]
      },
      nxptemplate: {
        options: {
          archive: 'resources/nxp-template.zip'
        },
        files: [
          // {src: 'templates/nxp-template.html', expand:true,flatten:true, filter: 'isFile'},
          {flatten: true, expand:true, src: 'templates/nxp-template.html',dest:'/html',filter:'isFile'},
          {flatten: true, src: 'css/nxp-common**.css',filter:'isFile'},
          {flatten: true, src: 'fonts/icomoon.*',filter:'isFile'},
          {flatten: true, src: ['img/NXP**.*','img/nxp**.*','img/header-footer-sprite.png'],filter:'isFile'},
          {flatten: true, src: ['js/nxp-nav.js','js/homepage.js'],filter:'isFile'}
        ]
      }
    },
   // Empties folders to start fresh
    clean: {
      dest : {
        files: [{
          dot: true,
          src: [
            '.tmp',
            'dist/*'
          ]
        }]
      }
    },
    copy: {
        css: {
            expand: true,
            src: ['nxprebrand/css/*', 'css/basecamp-docs.css'],
            dest: 'dist/css',
            flatten:true,
            filter: 'isFile'
        },
        html: {
            expand: true,
            src:['*.html'],
            dest: 'dist/'                
        },
        less: {
            expand: true,
            src:['less/*'],
            dest: 'dist/less',
            flatten:true,
            filter: 'isFile'
        },
        js: {
            expand: true,
            src:['js/basecamp-docs.js','js/basecamp-template.js','js/bootstrap.min.js', 'js/homepage.js','js/nxp-nav.js'],
            dest: 'dist/js',
            flatten:true,
            filter: 'isFile'
        },
        font: {
            expand: true,
            src:['fonts/*'],
            dest: 'dist/fonts',
            flatten:true,
            filter: 'isFile'
        },
        img: {
            expand: true,
            src:['img/*'],
            dest: 'dist/img',
            flatten:true,
            filter: 'isFile'
        },
        templates: {
            expand: true,
            src:['templates/*'],
            dest: 'dist/templates',
            flatten:true,
            filter: 'isFile'
        },
        resources: {
            expand: true,
            src:['resources/*.zip'],
            dest: 'dist/resources',
            flatten:true,
            filter: 'isFile'
        }



    },
    less: {
      development: {
        options: {
          compress: false,
           ieCompat: true,
            plugins: [
                  // new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
                  // new (require('less-plugin-clean-css'))(cleanCssOptions)
                  new (require('less-plugin-clean-css'))('advanced')
                ],
          banner: "/* Updated <%= grunt.template.date ('yyyy-mm-dd') %> */\n"
        },
        files: {
          // target.css file: source.less file
           "css/nxp-common.css": "less/nxp-common.less"
          // "css/basecamp.css": "less/basecamp.less",
          // "css/basecamp-only-icons.css": "less/basecamp-only-icons.less",
          // "css/basecamp-only-buttons.css": "less/basecamp-only-buttons.less",
          // "css/basecamp-legacy-header-footer-progressive.css": "less/basecamp-legacy-header-footer-progressive.less",
          // "css/basecamp-legacy-header-footer.css": "less/basecamp-legacy-header-footer.less",
          // "css/basecamp-no-header-footer.css": "less/basecamp-no-header-footer.less",
          // "css/thesink.css": "less/thesink.less"

        }
      },
      production: {
        options: {
          // compress: true,
          cleancss: true,
          ieCompat: true,
          // yuicompress: true,
          // optimization: 2,
          banner: "/* Updated <%= grunt.template.date ('yyyy-mm-dd') %> */\n"
        },
        files: {
          // target.css file: source.less file
          "css/nxp-common.min.css": "less/nxp-common.less"
          // "css/basecamp.min.css": "less/basecamp.less",
          // "css/basecamp-only-icons.min.css": "less/basecamp-only-icons.less",
          // "css/basecamp-only-buttons.min.css": "less/basecamp-only-buttons.less",
          // "css/basecamp-legacy-header-footer-progressive.min.css": "less/basecamp-legacy-header-footer-progressive.less",
          // "css/basecamp-legacy-header-footer.min.css": "less/basecamp-legacy-header-footer.less",
          // "css/basecamp-no-header-footer.min.css": "less/basecamp-no-header-footer.less",
          // "css/thesink.min.css": "less/thesink.less"
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
      },
      styles: {
        files: ['less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          // nospawn: true,
          livereload: LIVERELOAD_PORT
        }
      }
    },
    connect: {
      options: {
        port: 9000,
        hostname: 'localhost'
      },
      livereload: {
        options: {
          middleware: function(connect) {
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
    },
    uncss: {
      dist: {
        files: [{
          src: 'index.html',
          dest: 'cleancss/tidy.css'
        }]
      }
    },
    cssmin: {
      dist: {
        files: [{
          src: 'cleancss/tidy.css',
          dest: 'cleancss/tidy.css'
        }]
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

 grunt.registerTask('build',[
        'clean',
        'buildcss',
        'compress',
        'copy'
    ]);

  grunt.registerTask('default', ['server']);
  grunt.registerTask('watchLess', ['watch:styles']);
  grunt.registerTask('buildcss',['less']);
};