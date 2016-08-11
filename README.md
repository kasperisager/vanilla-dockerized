# Vanilla Dockerized

> A Dockerized single-node Vanilla Forums setup ready for take-off.

[![Travis](https://img.shields.io/travis/kasperisager/vanilla-dockerized.svg)](https://travis-ci.org/kasperisager/vanilla-dockerized)

## Requirements

- [Docker Engine](https://docs.docker.com/installation/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only)

## Configuration

To configure the environment variables of the different containers copy [`.env.example`](.env.example) to `.env` and adjust to your needs.

The initial Vanilla configuration is performed when first installing Vanilla after booting up the different containers. Prior to running the installation you must however copy [`config.example.php`](front/config/vanilla/config.example.php) to `config.php` in the [`front/config/vanilla`](front/config/vanilla) directory to include some initial configuration required for the setup to function properly.

## Running

```sh
$ docker-compose up
```

Simple as that! Once all containers have been booted up and the database created in [`database/data`](database/data) (optionally specified in `.env`) you can navigate to the address of your server to continue with the Vanilla installation. You can find the database information in [`config.example.php`](front/config/vanilla/config.example.php); while the name, user, and password are all pre-entered on the installation page, the host is forced and has to be set manually.

## Upgrading

When new versions of Vanilla are released the `front` container will need to be rebuilt. To rebuild the container using the new release, update the `VANILLA_VERSION` environment variable in [`front/Dockerfile`](front/Dockerfile) and then run:

```sh
docker-compose build front
docker-comopse up
```

Since the `VANILLA_VERSION` variable is used at runtime rather that build time it must be set in the `Dockerfile` and not `.env`.

## Addons

Addons in the [`applications`](applcations), [`locales`](locales), [`plugins`](plugins), and [`themes`](themes) directories will be copied to the `front` container when building. Follow the steps described in [_Upgrading_](#upgrading) when adding new addons to make sure that they're copied to the container.

## Security

While most processes with the exception of memcached are run as `root` to circumvent permission issues, only ports `80` and `443` are publicly exposed. This means that the database and cache containers can only be accessed from within the host machine as well as linked containers but not from the outside.

## Mail

The setup does not include a built-in mail server as this is better left to dedicated providers. A dedicated SMTP server is therefore required for mail in Vanilla to function properly. [SendGrid](https://sendgrid.com) has a free plan that should be suitable for smaller installations; they also provide larger plans as needed.

## License

Copyright &copy; 2015 [Kasper Kronborg Isager](https://github.com/kasperisager). Licensed under the terms of the [MIT license](LICENSE.md).
