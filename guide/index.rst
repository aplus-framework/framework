Framework
=========

.. image:: image.png
   :alt: Aplus Framework

Aplus Framework.

- `Installation`_
- `About`_
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
