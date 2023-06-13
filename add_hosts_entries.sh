#!/bin/bash

# Define the entries to be added
entry1="127.0.0.1 app.loc"
entry2="127.0.0.1 api.app.loc"

# Check if script is executed with root privileges
if [[ $EUID -ne 0 ]]; then
    echo "This script must be run as root. Please try again with sudo or as root user."
    exit 1
fi

# Add entries to the hosts file
echo -e "$entry1\n$entry2" >> /etc/hosts

echo "Hosts entries added successfully:"
echo "$entry1"
echo "$entry2"