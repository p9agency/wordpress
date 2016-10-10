module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
  compass: {
    dist: {
      options: {
        config: 'config.rb'
      }
    }
  },
  uglify: {
    options: {
      mangle: false,
      beautify: true
    },
    my_target: {
      files: {
        'js/compiled/scripts.min.js': ['js/*.js']
      }
    }
  },
watch: {
  js: {
    files: ['js/*.js'],
    tasks: ['uglify']
  },
  css: {
    files: '**/*.scss',
    tasks: ['compass'],
    options: {
      livereload: true,
    },
  },
},
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['compass', 'uglify', 'watch']);

};
