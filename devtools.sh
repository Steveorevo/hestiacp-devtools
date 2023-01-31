#!/bin/bash
user=$1

# Give the user account a few seconds to be created
# before we try to add the composer and wp-cli
sleep 5
cd /usr/local/hestia/bin
./v-add-user-composer $user
./v-add-user-wp-cli $user
