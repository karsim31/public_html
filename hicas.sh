#!/bin/bash

folder_path="/home/hicasaci/public_html/"
backup_path="/tmp"

while true
do
    if [ ! -d "$folder_path" ]; then
        cp -r "$backup_path" "$folder_path"
    fi

    chmod -R 0555 "$folder_path"
    sleep 1
done