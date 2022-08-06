#!/bin/bash

# Build home page
pandoc -s --metadata title="seestem" -i README.md -o index.html  --self-contained --css=home.css

# Build oryx-privacy policy
pandoc -s --metadata title="Oryx App Privacy Policy" -i oryx-privacy.md  -o projects/oryx/index.html  --self-contained --css=home.css

# build htoml
cp ../htoml/README ./projects/htoml.txt

# build crawleth
cp ../crawleth/README ./projects/crawleth.txt
