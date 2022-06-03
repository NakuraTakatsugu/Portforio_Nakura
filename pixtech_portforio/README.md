# WordPress を使ってメディアサイトを制作する
## 

## 開発用コマンド

### package のインストール
下記のコマンドを実行し、packageのインストールを行ってから、開発にあたるようにしましょう。
```
yarn
```

### WordPress 環境の立ち上げ

```
yarn wp-start
```

`http://localhost:8888`にアクセスする。

### WordPress 環境の停止

```
yarn wp-stop
```

### linterツールの実行
```
yarn lint
```

### linterによるコードの修正
```
yarn fix
```
