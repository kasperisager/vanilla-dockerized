#!/usr/bin/env bash

# Install Docker Engine.
curl -sSL https://get.docker.com/ | sh

# Install Docker Compose.
curl -L https://github.com/docker/compose/releases/download/1.4.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
