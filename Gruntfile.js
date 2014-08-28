module.exports = function(grunt) {


  /**
   * load plugins
   */
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-grunticon');
  grunt.loadNpmTasks('grunt-svgmin');


  /**
   * Project configuration.
   */
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    //////////
    // COPY //
    //////////
    copy: {

      js: {
        src: 'bower_components/classie/classie.js',
        dest: 'scripts/dist/classie.js'
      }

    },


    ////////////
    // SVGMIN //
    ////////////
    svgmin: {
      options: {
        plugins: [{
          removeViewBox: false
        }, {
          removeUselessStrokeAndFill: false
        }, {
          convertPathData: {
            straightCurves: false // advanced SVGO plugin option
          }
        }]
      },
      grunticon: {
        files: [{
          expand: true,
          cwd: 'images/svg/src',
          src: ['*.svg'],
          dest: 'images/svg/min'
        }]
      }
    },


    ///////////////
    // GRUNTICON //
    ///////////////
    grunticon: {
      icons: {
        files: [{
          expand: true,
          cwd: 'images/svg/min',
          src: ['*.svg'],
          dest: "styles/css"
        }],
        options: {
          pngfolder: '../../images/png',
          cssprefix: '.icon__',
          template: 'grunticon.hbs',
          colors: {
            white: "#ffffff"
          }
        }
      }
    },


    //////////
    // SASS //
    //////////
    sass: {
      prod: {
        options: {
          style: 'compressed'
        },
        files: {
          'styles/css/lap_and_up.min.css' : 'styles/scss/lap_and_up.scss',
          'styles/css/palm.min.css' : 'styles/scss/palm.scss',
          'styles/css/ie.min.css' : 'styles/scss/ie.scss'
        }
      }
    },


    ///////////
    // WATCH //
    ///////////
    watch: {
      sass: {
        files: ['styles/scss/**/*.scss'],
        tasks: ['sass']
      },
      svg: {
        files: ['images/svg/src/**/*.svg'],
        tasks: ['svgmin:grunticon','grunticon']
      }
    }


  });


  /**
   * default tasks
   */
  grunt.registerTask('default', ['copy','svgmin','grunticon','sass']);

};
