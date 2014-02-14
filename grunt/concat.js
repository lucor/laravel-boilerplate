module.exports = {
    js_frontend: {
        options: {
            separator: ';'
        },
        src: [
            'bower_components/jquery/jquery.js',
            //'bower_components/bootstrap/js/alert.js',
            'assets/js/frontend.js'
        ],
        dest: 'public/assets/js/frontend.js'
    },
    js_backend: {
        options: {
            separator: ';'
        },
        src: [
            'bower_components/jquery/jquery.js',
            'assets/js/backend.js'
        ],
        dest: 'public/assets/js/backend.js'
    },
    css_frontend: {
        src: [
            'bower_components/bootstrap/dist/css/bootstrap.css',
            'assets/css/frontend.css'
        ],
        dest: 'public/assets/css/frontend.css'
    },
    css_backend: {
        src: [
            'bower_components/bootstrap/dist/css/bootstrap.css',
            'assets/css/backend.css'
        ],
        dest: 'public/assets/css/backend.css'
    }
};