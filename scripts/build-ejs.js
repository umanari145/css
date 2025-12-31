import ejs from 'ejs';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// EJSファイルのコンパイル
const srcFile = path.join(__dirname, '../ejssample/src/ejs/index.ejs');
const destFile = path.join(__dirname, '../ejssample/build/index.html');

try {
  const template = fs.readFileSync(srcFile, 'utf-8');
  const html = ejs.render(template);
  
  // 出力ディレクトリが存在しない場合は作成
  const destDir = path.dirname(destFile);
  if (!fs.existsSync(destDir)) {
    fs.mkdirSync(destDir, { recursive: true });
  }
  
  fs.writeFileSync(destFile, html);
  console.log(`✓ EJS compiled: ${srcFile} → ${destFile}`);
} catch (error) {
  console.error('EJS compilation failed:', error);
  process.exit(1);
}

