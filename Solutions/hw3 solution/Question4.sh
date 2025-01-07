#!/bin/bash

log_file="user_management.log"

read -p "Enter a Username: " username


if id "$username" &>/dev/null ; then
    echo "User already exists." >> $log_file
else
    sudo useradd -m "$username"
    echo "User created."
    echo "Enter a password for user :"
    sudo passwd "$username"
    sudo chmod 740 "/home/$username
