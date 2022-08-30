#!/bin/bash

# Build homepage with htoml
../htoml/target/release/htoml index.toml

###################### ~ ######################

# Remove last line of README (last update date)
sed -i '$ d' ./kaindume/README.md

# Append date to README
echo "*__email:  kaindume (at) kwatafana (dot) org__* | updated: $(date -I)" >> ./kaindume/README.md

# Build home page
pandoc -s --metadata title="Jackson G. Kaindume" -i ./kaindume/README.md -o ./kaindume/index.html  --self-contained --css=style.css

# Build scripts.md
pandoc -s --metadata title="Code Snippets" -i ./kaindume/scripts.md -o ./kaindume/scripts.html  --self-contained --css=style.css --toc

# Build oryx-privacy policy
pandoc -s --metadata title="Oryx App Privacy Policy" -i oryx-privacy.md  -o oryx/index.html  --self-contained --css=style.css

# build htoml
pandoc -s --metadata title="htoml" -i ../htoml/README.md -o ./kaindume/projects/htoml.html  --self-contained --css=style.css

# build crawleth
pandoc -s --metadata title="crawleth" -i ../crawleth/README.md -o ./kaindume/projects/crawleth.html  --self-contained --css=style.css

# build h4
pandoc -s --metadata title="h4" -i ../h4ck1ng/README.md -o ./kaindume/projects/h4.html  --self-contained --css=style.css

# build cyrtophora
pandoc -s --metadata title="cyrtophora" -i ../cyrtophora/README.md -o ./kaindume/projects/cyrtophora.html  --self-contained --css=style.css

# build emerald
pandoc -s --metadata title="emerald" -i ../emerald/README.md -o ./kaindume/projects/emerald.html  --self-contained --css=style.css


###################### Writings ######################

# Password Hashing
pandoc -i ../cyrtophora/spec/password-hashing.md -o ./kaindume/writings/password-hashing.html --self-contained --css=./style.css --toc

# ISPs and Tunnel Vision
pandoc -s --metadata title="ISPs and Tunnel Vision" -i ../writings/hmm/essays/DONE/tunnel_vision.md -o ./kaindume/writings/tunnel_vision.html --self-contained --css=./style.css --toc

# Systems Coding
pandoc -s --metadata title="Systems Coding" -i ../writings/systems_coding/README.md -o ./kaindume/writings/systems-coding.html --self-contained --css=./style.css --toc

# SQLite Transactions
pandoc -s --metadata title="SQLite Transactions" -i ../writings/hmm/sqlite_transactions.md -o ./kaindume/writings/sqlite-transactions.html --self-contained --css=./style.css --toc

# Solana Algo-rythm
pandoc -s --metadata title="Solana Algo-rythm" -i ../writings/solana/README.md -o ./kaindume/writings/solana-algo-rythm.html --self-contained --css=./style.css --toc
