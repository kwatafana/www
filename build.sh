#!/bin/bash

# Remove last line of README (last update date)
sed -i '$ d' README.md

# Append date to README
echo "by Jackson G. Kaindume | Last updated: $(date -I)" >> README.md

# Build home page
pandoc -s --metadata title="kwatafana.org" -i README.md -o index.html  --self-contained --css=home.css

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

# Password Hashing
pandoc -i ../cyrtophora/doc/password-hashing.md -o writings/password-hashing.html --self-contained --css=./writings.css --toc

# ISPs and Tunnel Vision
pandoc -s --metadata title="ISPs and Tunnel Vision" -i ../writings/hmm/essays/DONE/tunnel_vision.md -o writings/tunnel_vision.html --self-contained --css=./writings.css --toc

# Systems Coding
pandoc -s --metadata title="Systems Coding" -i ../writings/systems_coding/README.md -o writings/systems-coding.html --self-contained --css=./writings.css --toc

# SQLite Transactions
pandoc -s --metadata title="SQLite Transactions" -i ../writings/hmm/sqlite_transactions.md -o writings/sqlite-transactions.html --self-contained --css=./writings.css --toc

# Solana Algo-rythm
pandoc -s --metadata title="Solana Algo-rythm" -i ../writings/solana/README.md -o writings/solana-algo-rythm.html --self-contained --css=./writings.css --toc
