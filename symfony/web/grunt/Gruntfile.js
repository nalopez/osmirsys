module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: '../js/custom/*.js',
                dest: '../js/<%= pkg.name %>.min.js'
            }
        },
        sass: {
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: [{
                    expand: true,
                    cwd: 'sass',
                    src: ['**/*.scss'],
                    dest: 'css',
                    ext: '.css'
                }]
            }
        },
        cssmin: { // Begin CSS Minify Plugin
            target: {
                files: [
                    {
                        src: '../css/custom/base.css',
                        dest: '../css/base.min.css',
                    },
                    {
                        src: '../css/custom/header.css',
                        dest: '../css/header.min.css',
                    },
                ]
            }
        },
        watch: { // Compile everything into one task with Watch Plugin
            css: {
                files: '../css/custom/*.css',
                tasks: ['sass', 'cssmin']
            },
            js: {
                files: '../js/custom/*.js',
                tasks: ['uglify']
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['watch']);

};