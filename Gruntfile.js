module.exports = function(grunt) {
  // Do grunt-related things in here
  grunt.loadNpmTasks('grunt-angular-gettext');
  
  grunt.initConfig({
      nggettext_extract: {
          pot: {
              files: {
                  'po/template.pot': ['**/*.html']
              }
          }
      },
      nggettext_compile: {
          all: {
              files: {
                  'translations.js' : ['po/*.po']
              }
          }
      }
  });
};