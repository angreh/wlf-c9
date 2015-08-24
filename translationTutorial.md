Tutorial seguido para fazer sistema de tradução.

==================================================
Terminal:
npm install angular-gettext
npm install -g grunt-cli
npm install grunt
npm install grunt-angular-gettext

==================================================
app.js:
var app = angular.module('app', ['gettext']);
app.controller('TestCtrl', function($scope){

});
app.run(function(gettextCatalog){
	gettextCatalog.currentLanguage = 'pt';
	gettextCatalog.debug = true;
});

==================================================
html (qualquer):
<p translate>Texto a ser traduzido</p>

==================================================
Gruntfile.js (raiz):
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

==================================================
Terminal:
grunt nggettext_extract (para pegar os textos que
devem ser traduzidos e colocar num arquivo de 
template *.pot)

==================================================
Poedit:
Abra um novo arquivo usando o template, faça a 
tradução dos textos e salve dentro do local 
especificado (po/*.po)

==================================================
Terminal:
grunt nggettext_compile (para gerar o arquivo
translations.js que contém a tradução do que deve ser 
incluida no site)

Maiores referências:
https://lostechies.com/gabrielschenker/2014/02/11/angularjspart-12-multi-language-support/
https://angular-gettext.rocketeer.be/