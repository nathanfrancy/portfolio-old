module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: ['js/jquery.js', 'js/bootstrap.js'],
        dest: 'js/build/scripts.min.js'
      }
    },

    sass : {
      dist : {
        options: { 
          style: 'expanded'
        },
        files : { 
          'css/build/style.css': 'css/sass/style.scss'
        }
      }
    },

    watch : {
      files: ['css/sass/style.scss', 'css/sass/bootstrap.scss'],
      tasks: ['sass', 'cssmin']
    },

    cssmin : {
      combine : {
        files : {
          'css/build/style.min.css': ['css/build/style.css']
        }
      }
    }
    
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['sass', 'cssmin','uglify']);
};