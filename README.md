pthreads-autoloading-composer
=============================

The subject of how to use composer in conjunction with complicated dependencies often arises on the issues list for pthreads.

This repository seeks to set out a sane example of using composers autoloader and pthreads together.

Notes
=====

Note that, one should learn to recognize avoiding mutable state as a good thing; when we are loading something like Symfony,
we can safely assume that the code was never intended to be executed by multiple threads. 

*The strategy used here ensures that each thread (Worker) gets a thread local copy of the framework, or whatever is being loaded, in memory.*

Run the Demo
============

    git clone https://github.com/krakjoe/pthreads-autoloading-composer
    cd pthreads-autoloading-composer
    composer install
    php auto.php
