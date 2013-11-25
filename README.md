
Symfony2 CMS Docs (current v 2.2.10)
==============================================

This is a Symfony2 based CMS on its second version. 
A lot Of improvements have to be done to provide cleaner coding and flexibility.

At the moment custom made PageBundle, MenuBundle and SettingBundle are required.
SkeletonBundle is a basic structured with simple functionalities so it can be cloned to create new bundles for new content types.

The settings bundle can be omitted if you load the required settings variables from config.yml and change the service that provides
the other bundles with the variables to seeks the hard-coded ones but i see no reason why you would want to do that.

Extra optimization must be done in all bundles.

The CMS required four 3 pages to exist to work. These are the homepage, the 404 page and the tagged page (if there a tags and filtered results)
For each new content bundle the tagged page must exists.

You can find the requirements for Symfony2 here http://symfony.com/doc/2.0/reference/requirements.html


Installation
---------------------------------------------

Due to the use of the Zurb Foundation Framework 5 (version 1.0.1) the need for the following is unavoidable unless you do not need the framework at all.

We need to install NodeJs, Node Packaged Modules, Ruby, compass, sass, foundation gems and GIT and bower dependency manager if they are not already installed to the system.
More information can be found below at their official web sites:

http://git-scm.com/downloads				(GIT)
http://nodejs.org/							(NodeJs)
https://npmjs.org/							(Node Packaged Modules)
http://www.rubyinstaller.org/				(Ruby)
https://github.com/bower/bower				(Bower)
http://sass-lang.com/install				(Sass)
http://compass-style.org/install/			(Compass)
http://foundation.zurb.com/docs/sass.html	(Foundation 5 - Sass based)

The command line steps are:

npm install -g bower
gem update --system
gem install sass
gem install compass

gem install foundation

Navigate in your /web folder via Git bash and run
bower install

In case you are behind a firewall and connection to git is refused force https for all git connections with running this in your bash
git config --global url."https://".insteadOf git://



Deployment
---------------------------------------------
You need to do a git clone of the git repo

git clone 

Install composer http://getcomposer.org/download/

Use packagist https://packagist.org/
You need to run a composer install to get the vendor libraries files (composer update to get latest version)

Install compass http://compass-style.org/install/

Install the zurb foundation 3 http://foundation.zurb.com/docs/sass.html make sure you install the version 3 (4 is also available atm) of upgrade to version 4 for your new project
you can also decide not to use compass, zurb foundation or sass preprocessor. This is your decision on how you want to handle front end development / framework, I suggest you upgrade
to Zurb Foundation 4 or change to Twitter Boostrap if you prefer Less as preprocessor

Setup your virtual host (see details bellow)

Setup a database and provide the settings to the app/config/parameters.yml file(example bellow). Additionally in the same file you have to set the paths for sass,compass and java.
This has to be done also for the production/development server.

If you run mac OS with mamp remember to set properly your php date.timezone settings (http://stackoverflow.com/questions/6194003/timezone-with-symfony-2)

You should find your php.ini  in /private/etc if it exists, otherwise:

sudo cp /private/etc/php.ini.default /private/etc/php.ini

Edit /private/etc/php.ini and set date.timezone.

Change the memory limit in your php.ini to 1024M and have intl extension enabled

Create the log folder that you added in the virtual host settings (if you did set one).

Run symphony2 commands

php app/console cache:clear

php app/console cache:warmup

php app/console doctrine:schema:update --force

php app/console assets:install

php app/console assetic:dump

Create the a new folder called uploads within your web directory of get the uploads folder from the ci or live website.

Your project should work now.

Login to /admin/dashboard
Add a set of settings
and you can see your front end working



parameters.yml File example contents
---------------------------------------------
parameters:

    database_driver:   pdo_mysql
    database_host:     localhost
    database_port:     ~
    database_name:     dbname
    database_user:     root
    database_password: ~

    mailer_transport:  smtp
    mailer_host:       localhost
    mailer_user:       ~
    mailer_password:   ~

    locale:            en
    secret:            ThisTokenIsNotSoSecretChangeIt
    
    javapath:          C:\Program Files\Java\jre7\bin       #usr/bin/java
    compass.bin:       C:\Program Files\Ruby193\bin\compass #usr/bin/compass
    sass.bin:          C:\Program Files\Ruby193\bin\sass    #usr/bin/sass
    
    unix_socket:       ~ #for your db connection for mac users





Virtual Host Settings
---------------------------------------------
<VirtualHost *:80>

    DocumentRoot "c:/wamp/www/domainname/web"
    ServerName domainname.prod
    ServerAlias domainname.test
    ServerAlias domainname.dev

    # set some environment variables depending on host
    SetEnvIfNoCase Host domainname\.prod domainname_env=prod
    SetEnvIfNoCase Host domainname\.dev domainname_env=dev
    SetEnvIfNoCase Host domainname\.test domainname_env=test

    # consider a json formatted log string 
    LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-agent}i\"" custom

    # remove image file noise from access logs
    SetEnvIf Request_URI \.(jgp|gif|png|css|js) static
    CustomLog c:/wamp/www/domainname/log/domainname-access_log custom env=!static
    CustomLog c:/wamp/www/domainname/log/domainname-static_log custom env=static

    # LogLevel  debug can be useful but any php warning will always and only appear in the 'error' level
    LogLevel info
    ErrorLog c:/wamp/www/domainname/log/domainname-error_log

    # level 0 is off. Use only for debugging rewrite rules
    RewriteLogLevel 0
    RewriteLog c:/wamp/www/domainname/domainname-rewrite_log


    # for profiling information. Should not be used in production
    Alias /xhprof_html /usr/local/share/php/share/pear/xhprof_html

    <Directory c:/wamp/www/domainname/web>

        RewriteEngine On

        # use the environment variables above to select correct 
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{ENV:domainname_env} test
        RewriteRule ^(.*)$ app_test.php [QSA,L]

        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{ENV:domainname_env} dev
        RewriteRule ^(.*)$ app_dev.php [QSA,L]

        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{ENV:domainname_env} prod
        RewriteRule ^(.*)$ app.php [QSA,L]

        Options +Indexes
        Order Allow,Deny
        Allow from all

        # this is best left to 'none' rather than 'All' to 
        # avoid the apache process looking for htaccess files all the way 
        # up the file system tree. in this configuration we avoid 5 stat calls 
        AllowOverride none
        
    </Directory>

</VirtualHost>



Updating to the ci server and the live server
---------------------------------------------

01. git pull
02. php app/console cache:clear
03. php doctrine:schema:update --force
04. php app/console assetic dump

For the production server the process is the same but you should use 
php app/console cache:clear --env=prod
php app/console assetic dump --env=prod



Known Bugs and required features
---------------------------------------------
01. Need for proper ACL
02. Expanded content blocks should not be draggable
03. Query/Query responce Cashing on repocitory files
04. Global content blocks to be used by more than one relation to page, blog etc items
05. Code documentation
06. Clean up and refactor code
07. Multilanguage ability
08. Ajax based backend
09. Save correct (logged in) user on edit page



Skeleton Bundle Use instructions
-----------------------------------------------
The skeleton bundle is now ready to be used as base for the creation of new content bundles.

The process for this is to:

01. Copy the SkeletonBundle folder and rename it properly (e.g. ProductsBundle)
02. Edit the admin class file with the correct names for fields and variables.
03. Edit the Controller files with correct namespaces and variable names
04. Change the Dependency Injection configuration and extension to fit your bundle
05. Edit the Entity file to fit your database needs
06. Edit the repository file to suit your needs
07. Change the bundles routing file to provide the required functional urls
08. Alter the views
09. Add the requested configuration values to the config.yml
10. Add the bundle to the registered bundles list in AppKernel
11. Clear cache
12. Add the a service for the new bundle admin and add it to the sonata admin config
13. Include the bundle routing file to the app routing
14. Edit the menu entity so you can add menu items for that bundle
15. Edit the tag entity so you can add menu items for that bundle
16. Edit the category entity so you can add menu items for that bundle
17. Edit the contentblocks entity so you can add menu items for that bundle
18. Edit the AddMenuTypeFieldSubscriber to be able to create menu items for that bundle
19. Edit the MenuBuilder to add the case for the link generation of your bundle
20. doctrine:schema:update --force
21. Create an Page in that bundle to display the filtered results with alias tagged

Your new bundle should now work.
(prequisites are the PageBundle, SettingsBundle and MenuBundle)




Installed bundles
----------------------------------------------
sonata-project admin bundle

TinymceBundle (http://knpbundles.com/stfalcon/TinymceBundle)

knplabs/knp-menu bundle

SonataMediaBundle (http://knpbundles.com/sonata-project/SonataMediaBundle)

friendsofsymfony user bundle 




Useful Links and Documentation
----------------------------------------------
Symfony2 Documentation
http://symfony.com/doc/current/index.html 

Doctrine2 ORM Documentation
http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/index.html

Symfony2 Cheatsheet
http://www.symfony2cheatsheet.com/

Sonata Admin, Sonata Media, Knp Menu and FOS User Bundle Documentation
http://sonata-project.org/bundles/admin/2-1/doc/index.html
http://sonata-project.org/bundles/media/2-1/doc/index.html
https://github.com/FriendsOfSymfony/FOSUserBundle
http://knpbundles.com/KnpLabs/KnpMenuBundle

Website with listing of available Symfony2 Bundles
http://knpbundles.com/

Tutorial on how to build a Blog in symfony2
http://tutorial.symblog.co.uk/

Links to Front end Frameworks (Zurb and TwitteBoostrap)
http://bootstrap.braincrafted.com/
http://foundation.zurb.com/