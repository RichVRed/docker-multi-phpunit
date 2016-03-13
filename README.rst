===============================
Docker Multi PHPUnit
===============================

Test your PHP code in multiple versions using Docker.

* Free software: Apache 2.0 license

Features
--------

* Supports PHPUnit tests on PHP 5.4, 5.5, 5.6 and HHVM.

Pre-requisites
--------------

* Docker Toolbox: https://docs.docker.com/toolbox/overview/

Usage Example
---------------------

Sample app in the ``example`` folder.

.. code:: bash

    cd example

    # Run the unit tests in different versions:

    docker-compose run php54 phpunit

    docker-compose run php55 phpunit

    docker-compose run php56 phpunit

Also, see ``example/docker-compose.yml``.