#!/bin/bash

# Get user input
password=$1

# Insecure password storage in a file
echo $password > passwords.txt
