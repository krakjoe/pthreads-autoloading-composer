pthreads-autoloading-composer
=============================

The subject of how to use composer in conjunction with complicated dependencies often arises on the issues list for pthreads.

This repository seeks to set out a sane example of using composers autoloader and pthreads together.

Notes
=====

When we are loading something like Symfony, we can safely assume that the code was never intended to be executed by multiple threads. 

Strategies within pthreads allow it to avoid sharing state between contexts when the objects used are not intended for use in a multithreaded architecture, however, these strategies may
have negative side effects in very complex environments.

*The strategy used here ensures that each thread (Worker) gets a thread local copy of the framework, or whatever is being loaded, but does not break the abilities of objects that descend from pthreads.*

Run the Demo
============

    git clone https://github.com/krakjoe/pthreads-autoloading-composer
    cd pthreads-autoloading-composer
    composer install
    php auto.php
