Framework
=========

.. image:: image.png
   :alt: Aplus Framework

Aplus Framework.

- `Installation`_
- `About`_
- `Autoloading and Preloading`_
- `Conclusion`_

Installation
------------

The installation of this package can be done with Composer:

.. code-block::

    composer require aplus/framework

About
-----

This package is responsible for installing other Aplus Framework libraries.

It has the **Aplus** class, through which it is possible to get information
about the current version of the installed framework:

.. code-block:: php

    echo Aplus::VERSION;
    echo Aplus::CODENAME;
    echo Aplus::DESCRIPTION;

With this package it is possible to create applications according to the need of
the developer.

As examples, you can analyze the `App <https://docs.aplus-framework.com/guides/projects/app/index.html>`_
and `One <https://docs.aplus-framework.com/guides/projects/one/index.html>`_
projects, which create structures using the `MVC <https://docs.aplus-framework.com/guides/libraries/mvc/index.html>`_
library.

Autoloading and Preloading
--------------------------

The **framework** package contains a file that loads and returns the autoloader
with the paths to the defined namespaces, and also a file to preload all the
framework classes.

Let's say you want to work with the framework classes defined in just one place
in such a way that you can update them all at once.

We assume that the installation is performed via Composer in a directory called
``composer`` in your user's home directory.

Create the directory:

.. code-block::

    mkdir composer

Enter the directory:

.. code-block::

    cd composer

Use Composer to install the framework files:

.. code-block::

    composer require aplus/framework

Create a symlink to share the files with all users on the system:

.. code-block::

    sudo ln -s ~/composer/vendor/aplus /usr/share

With this, you can autoload files from anywhere or preload them, as we'll see next.

Autoloading
###########

`Autoload <https://www.php.net/manual/en/language.oop5.autoload.php>`_ lets you
load classes automatically.

To load the framework classes automatically, put this line at the top of your
input file (front controller):

.. code-block:: php

    require '/usr/share/aplus/framework/autoload.php';

If you want to use the Autoloader instance loaded, pass the ``require`` result
to a variable:

.. code-block:: php

    $autoloader = require '/usr/share/aplus/framework/autoload.php';

If using the `MVC <https://docs.aplus-framework.com/guides/libraries/mvc/index.html>`_
library, you can also define this Autoloader instance as a service:

.. code-block:: php

    use Framework\MVC\App;

    App::setService('autoloader', $autoloader);

Example with Autoloading
""""""""""""""""""""""""

Let's see an example autoloading in the ``index.php`` file:

.. code-block:: php

    <?php
    use Framework\MVC\App;

    $autoloader = require '/usr/share/aplus/framework/autoload.php';
    $autoloader->setNamespace('App', __DIR__ . '/app');

    App::setService('autoloader', $autoloader);

    (new App())->run();

The Autoloader instance was reused, setting the directory to the ``App`` namespace
and also set as a service in the MVC
`App <https://docs.aplus-framework.com/guides/libraries/mvc/index.html#app>`_ class.

Preloading
##########

`Preloading <https://www.php.net/manual/en/opcache.preloading.php>`_ allows
loading classes to be available on every request as if they were part of the
PHP core.

It makes requests faster and saves memory!

Below we will see how to configure PHP to preload the Framework classes.

PHP-FPM
"""""""

In production, it is very common to use **FastCGI Process Manager**.

The ``php.ini`` file of `PHP-FPM <https://www.php.net/manual/en/book.fpm.php>`_
on Debian-based distributions is located at ``/etc/php/8.1/fpm/php.ini``.

To enable preloading enter the path of the preload file and the username,
which is normally ``www-data``:

.. code-block:: ini

    opcache.preload=/usr/share/aplus/framework/preload.php
    opcache.preload_user=www-data

Then restart the PHP-FPM service:

.. code-block::

    sudo systemctl restart php8.1-fpm.service

And that's it! Loaded classes. We can use them directly as if they were part of
the PHP core!

PHP Server
""""""""""

In development, you can use
`this package <https://github.com/natanfelles/php-server>`_, creating a file
called ``php-server.ini`` and insert the path to the preload file in the
``ini`` section:

.. code-block:: ini

    [ini]
    opcache.preload=/usr/share/aplus/framework/preload.php

And then up the PHP server:

.. code-block::

    php-server

Example with Preloading
"""""""""""""""""""""""

With the Framework preloaded, use the classes directly, without needing to
autoload or ``include``. Because they are already in memory!

Let's look at a basic file for responding to HTTP requests:

.. code-block:: php

    <?php
    use Framework\MVC\App;

    (new App())->runHttp();

And that's it!

Conclusion
----------

Aplus Framework is an easy-to-use tool for, beginners and experienced, PHP developers. 
It is perfect for creating high-performance applications of any size. 
The more you use it, the more you will learn.

.. note::
    Did you find something wrong? 
    Be sure to let us know about it with an
    `issue <https://gitlab.com/aplus-framework/framework/-/issues>`_. 
    Thank you!
