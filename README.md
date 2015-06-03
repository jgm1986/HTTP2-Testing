# HTTP-2-Testing
This repository contains all necessary for deploy HTTP/2 testing server or clients. The "clients" directory contains the scripts for download and install clients with HTTP 2 support easily. The "tests" folder contains some test templates and bash scripts for test automatization. You can get more info in to the README.md file located inside each folder.


### Version
0.0.1


### Installation

You need Git installed on your computer:


```sh
$ sudo apt-get install git
```

This project doesn't need installation. Only clone it on your computer:

```sh
$ git clone https://github.com/jgm1986/HTTP2-Testing.git http2-testing
$ cd http2-testing
```


### Content

This repository is organized under directories according with the content:

```
/
|
├───clients/        # Testing clients installation.
|       README.md:  # This file contains info about how to use the installation scripts.
|
├───tests/          # Contains the templates for the HTTP/2 Web server.
|   │   README.md:  # This file contains the tests description and installation.
|   │
|   └───templates/  # Contains the templates for the HTTP/2 Web server.
|   
└───scripts/        # Bash scripts for test automation.
    │   README.md:  # This file contains info about how to configure and launch tests automatically.
    |
    ├───h2/         # HTTP/2 scripts (for https:// URLs).
    │
    └───h2c/        # HTTP/2 Clear Text scripts (for http:// URLs).
```


### Tests

This repository contains a lot of tests for HTTP/2. The description about these tests are inside tests/README.md file. You can access to this file directly clicking [here](tests/README.md).


### Todo

 - Test Bash Scripts
 - Clients installers


License
----

MIT
