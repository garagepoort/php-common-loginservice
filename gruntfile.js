module.exports = function (grunt) {
    grunt.initConfig({

        concat: {
            js: {
                src: ['src/**/*.js'],
                dest: 'src/js/concat.js'
            }
        },
        uglify: {
            js: {
                src: 'src/js/concat.js',
                dest: 'public/loginservice.min.js'
            }
        },
        clean: ['src/js/concat.js']
    });

// load plugins
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');

// register at least this one task
    grunt.registerTask('default', [ 'concat', 'uglify', 'clean']);


};
