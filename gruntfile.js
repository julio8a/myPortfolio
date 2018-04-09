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

      imagemin: {
        static: {
            options: {
                optimizationLevel: 7
            },
            files: [{
              expand: true,
              cwd: 'builds/develop/projects/',
              src: [
                'city-engine/images/*.{png,jpg,gif}',
                'dashboard/images/*.{png,jpg,gif}',
                'inca/images/*.{png,jpg,gif}',
                'industries/images/*.{png,jpg,gif}',
                'my-esri/images/*.{png,jpg,gif}',
                'public-health/images/*.{png,jpg,gif}',
                'save-me/images/*.{png,jpg,gif}',
                'urb-ob-site/images/*.{png,jpg,gif}',
                'urb-ob-ui/images/*.{png,jpg,gif}',
                'web-app-builder/images/*.{png,jpg,gif}',
                'workforce/images/*.{png,jpg,gif}',
                'zip-tapestry/images/*.{png,jpg,gif}'
              ],
              dest: 'builds/develop/projects/'
           }]
        }
        // ,
        // dynamic: {
        //     files: [{
        //         expand: true,
        //         cwd: 'src/',
        //         src: ['**/*.{png,jpg,gif}'],
        //         dest: 'dist/'
        //     }]
        // }
    },
  
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
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-connect');
  
    grunt.registerTask(
        'default', [
            'concat', 
            'sass', 
            'imagemin', 
            'connect', 
            'watch'
        ]);
  
  }; //wrapper function