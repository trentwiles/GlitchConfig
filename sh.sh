#!/bin/bash

export HOME=/app

set -a && source <(curl -s localhost:1083/env) &> /dev/null && set +a

su --preserve-environment --login app
