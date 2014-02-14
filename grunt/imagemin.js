module.exports = {
    dist: {
        files: [{
            expand: true,
            cwd: 'assets/images/',
            src: ['**/*.{png,jpg,jpeg,gif}'],
            dest: 'public/assets/images/'
        }]
    }
};