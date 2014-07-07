User Account Address system
=====

About
-----
This is one of the extenstions to the KryuuAccount module for zf2.
This will give you access to have user with addresses, you will notice that its a very loose connection to the user so you are able to easily change the user entity profiler

Installation
-----

This module is using doctrine 2 to initialize the database run the the schema-tool
    
    ./vendor/doctrine-module orm:schema-tool:update

You can add a --force to the end to force the changes.

Future
-----

Need delete mechanism, this will be added when the KryuuAccount gets the trigger added.
Composer needs to be written.
Need optimization for performance improvement.
