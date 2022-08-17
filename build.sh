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
pandoc -s --metadata title="htoml" -i ../htoml/README.md -o projects/htoml.html  --self-contained --css=code.css

# build crawleth
pandoc -s --metadata title="crawleth" -i ../crawleth/README.md -o projects/crawleth.html  --self-contained --css=code.css

# build h4
pandoc -s --metadata title="h4" -i ../h4ck1ng/README.md -o projects/h4.html  --self-contained --css=code.css

# build cyrtophora
pandoc -s --metadata title="cyrtophora" -i ../cyrtophora/README.md -o projects/cyrtophora.html  --self-contained --css=code.css

# build emerald
pandoc -s --metadata title="emerald" -i ../emerald/README.md -o projects/emerald.html  --self-contained --css=code.css


###################### Writings ######################
pandoc -i ../cyrtophora/doc/password-hashing.md -o writings/password-hashing.html --self-contained --css=../cyrtophora/doc/style.css --toc
