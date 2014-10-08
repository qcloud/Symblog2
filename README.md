Symblog2
========================

Symblog2 is influenced by the famous Symblog blogging application powered by Symfony2. It uses the latest twitter bootstrap 3.x front-end UI framework and comes with more advanced UI and responsive layout along with many other feature improvements.  The codebase is 100% PSR2 compatible and it uses some most popular doctrine extensions along with many useful bundles.  

** Symblog2 is under heavy development **

1) Installing Symblog2
----------------------------------

* Install git client on your system and run `git clone https://github.com/qcloud/Symblog2.git` from the terminal. You must be inside in your htdocs folder. 
* After cloning is done, type `cd Symblog` and press enter. 
* Then run `composer update` to install all the necessary bundles and dependencies along with SF2 framework itself.   
* Then go to `Symblog/app/parameters.yml` and update your database credentials.
* Go back to the terminal again and type `app/console doctrine:database:create`
* Then run `app/console doctrine:migrations:migrate -n` to generate all the necessary schemas.
* Then run `app/console doctrine:fixtures:load` and press y then enter when it asks for purge the database. It will generate some dummy data to play with.
* Then run `app/console asset:install web` in windows machine or `app/console asset:install --symlink` in linux machine to install all the necessary stylesheets and javascript files.
* You are good to go. 
* From the terminal type `app/console server:run` and press enter. It will create a development server on port 8000
* On your browser type `http://localhost:8000` to run the Symblog2 application.

Enjoy!

