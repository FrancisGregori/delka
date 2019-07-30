module.exports = function (grunt) {



    // Load the plugin that provides the "compass" task.
    grunt.loadNpmTasks('grunt-contrib-compass');

    // Load the plugin that provides the "watch" task.
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Load the plugin that provides the "scss" task.
    grunt.loadNpmTasks('grunt-sass');

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Load the plugin that provides the "concat" task.
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Load the plugin that provides the "cssmin" task.
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'cssmin']);


    grunt.loadNpmTasks('grunt-browser-sync');

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: {
                spawn: false
                // livereload: true
            },
            sass: {
                files: [
                    '../css/source/*.scss',
                    '../css/source/pages/*.scss',
                    '../css/source/font-awesome/scss/*.scss',
                ],
                tasks: ['sass', 'cssmin']
            },
            uglify: {
                files: ['../js/source/*.js'],
                tasks: ['uglify']
            }
        },

        sass: {
            dist: {
                files: {
                    '../css/bootstrap.css': '../css/source/custom-bootstrap.scss',
                    '../css/styles.css': '../css/source/styles.scss',
                }
            }
        },

        // Browser sync task
        browserSync: {
            dev: {
                // What files to inject
                bsFiles: {
                    src: ['../css/*.css']
                },
                options: {
                    "watchTask": true,
                    "proxy": "http://delka.test/"
                }
            }
        },

        uglify: {
            options: {
                manage: false,
                preserveComments: 'all' //preserve all comments on JS files
            },
            my_target: {
                files: {
                    '../js/scripts.min.js': ['../js/source/scripts.js'],
                }
            }
        },
        cssmin: {
            my_target: {
                files: [{
                    expand: true,
                    cwd: '../css',
                    src: ['*.css', '!*.min.css'],
                    dest: '../css',
                    ext: '.min.css'
                }]
            }
        },


    });

    // Default task when the grunt command is called
    grunt.registerTask('default', [
        'browserSync',
        'watch'
    ]);
};