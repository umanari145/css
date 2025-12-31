# css

## ファイル概要
- animation.html cssを使った動的なアニメーション keyframe,animate, transition, before&afterの枠線, scroll検知など
- css_framework bulmaをベースにしたCSSフレームワーク npx gulpで動く

- checked_css radio,checkboxのチェック状態での連動表示、非表示

- font_chousei.html fontサイズ vwの使用など

- fontsize.html %表記,px,remなどについて

- image_font.html cssが画像とフォントサイズについての制御パターン

- image_object.php object-fitのプロパティについて。主に画像比率を保ったままのセンタリング

- main_visual.html メインキャッチ画像の固定方法などについて。backgroundがらみのプロパティ説明

- main_visual2.html 大型の背景画像の固定方法について。

- margin_float.html floatを使ったレイアウトの組み方について

- modal.html bootstrapを使ったモーダルウィンドウについて

- original_pararax.php transformを使ったpararaxエフェクトに関して

- position.html positionの細かい挙動などについて

- table.html tableについて。各幅のロジックがどのように決まるかなど

- table.html tableのborderのコツについて。

- table2.html ヘッダー固定テーブルの挙動について JSのライブラリ(jquery.tablefix.js)とcssを使ったパターンに関して

- vertical.html テーブルの中央よせに関して

- prohazusample 書籍「プロとして恥ずかしくない新CSSデザインの大原則」のソース。比較的オーソドックスなページのレイアウトについて

- sample/index.html 比較的小ネタ的なCSSについて。書籍「初めてのCSS設計」ネタ多し。またカスタマイズされたチェックボックスなど。

- samplesite01 書籍「現場のプロが本気で教える」HTML/CSSデザイン講義

- samplesite02〜04 サイトの作成サンプル。書籍「HTML5/CSS3モダンコーディング」のサンプルなど

- src/customer.scss mystyle.scssとmyvariable.scssの読み込み。これ1つで他のcssを読み込める


- tailwind 新しいCSSの手法
```
cd ./tailwind
npx tailwind build tailwind.css -c tailwind.js -o output.css
# https://tailwindcss.com/docs/what-is-tailwind/
# 元実際に読み込むcssはoutput.css
```

- sass/sample.scss sassの基礎的なサンプル

- flex flexのサンプル

- ejs ejs(htmlのテンプレートエンジン)を使ったサンプル(gulpで吐き出す)

- compassdemo compassを使ったdemo。201709ごろ使用。

- bulma bulmaを使ったhtmlのサンプル

## セットアップ（2025年版 - Gulp廃止）

### npmインストール

package.jsonに記述されたライブラリの読み込み

```bash
npm install
```

### ビルドコマンド

package.jsonのscriptに書かれたコマンドで各種ファイルをコンパイル

```bash
# すべてのファイルをビルド（LESS, SASS, EJS, カスタムCSS）
npm run build

# ファイル監視モード（開発用）- 変更を自動検知してビルド
npm start

# 個別ビルド
npm run build:less    # LESSのコンパイル
npm run build:sass    # SASSのコンパイル（Bulma）
npm run build:ejs     # EJSのコンパイル
npm run build:custom  # カスタムCSSのビルド（Bootstrap用）
```

### 使用技術（2025年版）

- **Dart Sass**: node-sassの代わりに最新のSassコンパイラを使用
- **Bootstrap 5.3**: 最新のBootstrapフレームワーク
- **Bulma 1.0**: 最新のBulmaフレームワーク
- **PostCSS + Autoprefixer**: ベンダープレフィックスの自動付与
- **chokidar-cli**: ファイル監視（Gulp不要）
- **npm-run-all**: 複数のnpmスクリプトを並列実行



## Docker環境（2025年版）

最新のNode.js環境で実行

```bash
# コンテナ起動（自動的にnpm install & npm startを実行）
docker-compose up -d

# ログを確認
docker-compose logs -f

# コンテナに入る
docker-compose exec node bash

# コンテナ内でコマンド実行
docker-compose exec node npm run build

# 停止
docker-compose down
```

### ローカル環境での実行

Dockerを使わない場合は、Node.js 18以上をインストール後：

```bash
npm install
npm start  # 開発モード（ファイル監視）
npm run build  # ビルドのみ
```