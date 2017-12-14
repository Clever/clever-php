.PHONY: all test override deps
SHELL := /bin/bash

all: deps test

deps:
	php composer.phar install

test: deps
	./vendor/bin/phpunit

override:
	./override/override.sh
