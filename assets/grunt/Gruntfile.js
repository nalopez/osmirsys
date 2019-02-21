module.exports = function(grunt) {

    // URI paths for our tasks to use.
    grunt.src = '../src/';


    // Project configuration.
    grunt.initConfig({

        /**
         * Package info
         */
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Init Uglify
         */
        uglify: {
            dev: {
                options: {
                  banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
                },
                files: {
                    '../../public/osmirsys.min.js' : '../src/js/**.js'
                }
            }
        },

        /*sass: {
            dev: {
                options: {
                    style: 'compressed' // 'nested', 'compact', 'expanded', 'compressed'
                },
                files: {
                    '../../public/osmirsys.min.css' : '../src/scss/**.scss'
                }
            },
        },*/
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');


    // Default task(s).
    grunt.registerTask('default', ['uglify'/*, 'sass'*/]);
    //grunt.registerTask('script', ['concat', 'uglify']);

};