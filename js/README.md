## Bower installation

To manage front end dependencies, bower is used. In the following the basic steps are explained. For more info visit https://bower.io/

First install bower:

    $ npm install -g bower

Run bower install to download the needed packages:

    $ bower install

To search and install new packages use (and add it automatically to the `bower.json` file):
    
    $ bower search <searchTerm>
    $ bower install --save <packageName>

To remove an existing package and delete it from the `bower.json` file use:

    $ bower uninstall --save <packageName>


## Run the App

Because the example app is using routing and request various files on runtime, a running webserver is needed. To fast setup one on your local machine, e.g. use:

    python -m SimpleHTTPServer 8080


Go to http://localhost:8080 to check your site.