#!/bin/bash
pandoc -i README.md -o ../www/index.html \
       -s --css=blog.css \
       --metadata title="🍪 Introducing Bizkit" \
       -H header.html

cp registration.html ../www/
