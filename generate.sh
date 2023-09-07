#!/bin/bash

docker run -v $(pwd):/project swaggest/json-cli json-cli gen-php https://raw.githubusercontent.com/compose-spec/compose-spec/master/schema/compose-spec.json --ns Tomb1n0\\PhpDockerComposeTypes --ns-path /project/src