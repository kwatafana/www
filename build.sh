#!/bin/bash

# Remove last line of README (last update date)
sed -i '$ d' README.md

# Append date to README
echo "Last updated: $(date -I)" >> README.md

# Build home page
pandoc -s --metadata title="seestem" -i README.md -o index.html  --self-contained --css=home.css

# Build oryx-privacy policy
pandoc -s --metadata title="Oryx App Privacy Policy" -i oryx-privacy.md  -o projects/oryx/index.html  --self-contained --css=home.css

# build htoml
pandoc -s --metadata title="htoml" -i ../htoml/README.md -o projects/htoml.html  --self-contained --css=home.css

# build crawleth
pandoc -s --metadata title="crawleth" -i ../crawleth/README.md -o projects/crawleth.html  --self-contained --css=home.css
