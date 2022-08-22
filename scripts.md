## Git

### Git change author

```shell
git rebase --root --interactive --exec "git commit --amend --author='name <email>' --no-edit"
```

### Git log pretty branches

```shell
git log --all --decorate --oneline --graph
```

---

## Creating packages in Dart/Flutter

```shell
$  dart create -t package <PACKAGE_NAME>
```

## Adjust volume with amixer

```shell
$ amixer -D pulse sset Master 100%
```

## AVI to MP4

```shell
#!/bin/bash

for i in *.avi;
    do ffmpeg -i "$i" -c:v libx264 -preset ultrafast "$(basename  "$i" .avi)".mp4;
done
```

## Download website recursively

```shell
wget -r <web address>
```
