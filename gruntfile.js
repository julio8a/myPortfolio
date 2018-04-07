module.exports = function(grunt) {
    grunt.initConfig({
  
      concat : {
        dist : {
          src: [
                 'js/*.js'
            ],
          dest: 'builds/develop/js/scripts.js'
        }
      }, //concat
  
      sass: {
        dist: {
          options: {
            style: 'expanded'
          },
          files : [{
            src: 'scss/styles.scss',
            dest: 'builds/develop/css/styles.css'
          }]
        }
      }, //sass
  
      connect: {
        sever: {
          options: {
            hostname: 'localhost',
            port: 3000,
            base: 'builds/develop/',
            livereload: true
          }
        }
      },
  
      watch: {
        options: {
          spawn: false,
          livereload: true
        },
        scripts: {
          files: [
              'builds/develop/*.html',
              'js/**/*.js',
              'scss/**/*.scss'],
          tasks: ['concat', 'sass']
        }
      }
  
  
    }); //initConfig
  
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-connect');
  
    grunt.registerTask(
        'default', [
            'concat', 
            'sass', 
            'connect', 
            'watch'
        ]);
  
  }; //wrapper function