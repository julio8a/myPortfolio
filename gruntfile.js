module.exports = function(grunt) {
    grunt.initConfig({
  
      concat : {
        dist : {
          src: [
                 'js/*.js'
            ],
          dest: 'docs/js/scripts.js'
        }
      }, // combine all JS files into one

      uglify: {
        dist: {
           files: {
              'docs/js/scripts.min.js': 'docs/js/scripts.js',
           }
        }
     }, // compress JS
  
      sass: {
        dist: {
          options: {
            outputStyle: 'compressed',
            sourceMap: true
          },
          files : [{
            src: 'scss/styles.scss',
            dest: 'docs/css/styles.css'
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
              cwd: 'docs/projects/',
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
                'zip-tapestry/images/*.{png,jpg,gif}',
                'calcite-ui-icons/images/*.{png,jpg,gif}',
                'product-logos/images/*.{png,jpg,gif}'
              ],
              dest: 'docs/projects/'
           }]
        } // Compress images
    },
  
      connect: {
        sever: {
          options: {
            hostname: 'localhost',
            port: 3000,
            base: 'docs/',
            livereload: true
          }
        }
      }, // Live load
  
      watch: {
        options: {
          spawn: false,
          livereload: true
        },
        scripts: {
          files: [
              'docs/*.html',
              'docs/js/*.json',
              'docs/projects/**/*',
              'js/**/*.js',
              'scss/**/*.scss'],
          tasks: ['concat', 'uglify', 'sass']
        }
      }
  
  
    }); //initConfig
  
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-connect');
  
    grunt.registerTask(
        'default', [
            'concat', 
            'uglify', 
            'sass', 
            'connect', 
            'watch'
        ]);
  
  }; //wrapper function