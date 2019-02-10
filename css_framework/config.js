const path = require('path')
let dirname = path.resolve('./')

let dest = dirname + '/dest'; // 出力先ディレクトリ
let src =  dirname + '/src';  // ソースディレクトリ


module.exports = {
  dirname:dirname,
  // cssのビルド設定
  css: {
    src: src + '/css/common.scss',
	watch: src + '/css/basic_util.scss',
    dest: dest + '/css/'
  },
  //html
  html: {
    src: src +'/html/index.pug',
    dest: dirname +'/',
  }
}
