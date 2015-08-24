
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 


Hi there! Welcome to Cloud9 IDE!

To get you started, we have created a small hello world application.

1) Open the hello-world.php file

2) Follow the run instructions in the file's comments

3) If you want to look at the Apache logs, check out ~/lib/apache2/log

And that's all there is to it! Just have fun. Go ahead and edit the code, 
or add new files. It's all up to you! 

Happy coding!
The Cloud9 IDE team


## Support & Documentation

Visit http://docs.c9.io for support, or to learn more about using Cloud9 IDE. 
To watch some training videos, visit http://www.youtube.com/user/c9ide

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Geral ==========================================================================
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Versões:

 - Apache: 2.4.7
 - PHP: 5.5.9
 - MySQL: 5.5.43
 - Linux: 14.13

Grunt:

 - modulo grunt-angular-gettext: para auxiliar no processo de tradução do site.

Angular:

 - modulo gettext: fazer a internacionalização do site, tradução
 - modulo route: para o carregamento ajax(dinâmico) das páginas
 
jQuery:

 - Usado para funcionamento do MaterializeCss
 

MaterializeCSS:

 - Usado para o template do Admin


++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Tradução =======================================================================
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Para criar e compilar o template de tradução

 - grunt nggettext_extract
 - grunt nggettext_compile

Usar o poedit para fazer traduções

 - poedit
 