module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
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
      styles: {
        files: ['less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });
 
  // Plugins
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
 
  // Default task(s).
  // grunt.registerTask('default', ['uglify', 'less']);
  // Uglify Tasks
  // grunt.registerTask('customers', ['uglify:customers']);
  // LESS Tasks
  grunt.registerTask('default', ['watch']);
};