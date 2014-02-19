module.exports = {
    js: {
        files: ['assets/js/*.*'],
        tasks: ['newer:concat:js_frontend', 'newer:concat:js_backend'],
        options: {
            livereload: true
        }
    },
    css: {
        files: ['assets/css/*.*'],
        tasks: ['newer:concat:css_frontend', 'newer:concat:css_backend'],
        options: {
            livereload: true
        }
    }
}