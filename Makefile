SHELL := /bin/bash # Use bash syntax

build:
	npm run build
start:
	php -S 0.0.0.0:8123 -t public
