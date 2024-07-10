#!/bin/bash

folder_path="/home/learning/public_html/meraviid"

find "$folder_path" -exec stat -c "%n %a" {} + > /opt/cpanel/ea-php74/root/tmp/learning.txt

while true
do
    # information
    diff /opt/cpanel/ea-php74/root/tmp/learning.txt <(find "$folder_path" -exec stat -c "%n %a" {} +) > /dev/null


    if [ $? -ne 0 ]; then
        find "$folder_path" -type f -exec chmod 555 {} +
        find "$folder_path" -type d -exec chmod 555 {} +
        find "$folder_path" -exec chown $(whoami) {} +
    fi

    sleep 1
done