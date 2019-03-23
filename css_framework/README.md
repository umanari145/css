### CSSフレームワーク

## layout系

### 基本変数

### 全般

- $gap: 64px マージン

#### 横幅(ブレークポイントごと)

- $mobile: up to 768px
- $tablet: from 769px
- $desktop: from 1024px
- $widescreen: from 1216px
- $fullhd: from 1408px

### container
- いわゆるwrapperに相当するコンテンナ部分
- margin: 0 autoがディフォルト
- いわゆるwrapperに相当する部分
- 端末ごとに幅をmarginで設定可能
- 幅変数は($横幅 - $gap*2)

### columns(拡張cols)

- ブロック単位の内包要素
- ブレークポイント付のflex,ブレークポイント時はflexが取れる
- オリジナル拡張ではmargin,paddingを全てとる

### column(拡張col)

- ブロックの内部要素
- ブレークポイント付で通常はflex: 1 1 0、SP時は親がflexをとる
- オリジナル拡張ではpaddingを全てとり、col_w9(columns+is-n)などで幅を取得している(flexは消える)
- col_wn_p n等分でpaddingあり

### w_10,w_10_p, w_auto, h_auto,input_auto
- 単純な幅
- 通常は%で5刻み。pはpxで5刻みで200まであり
- w_auto,h_autoは幅自由(主に上位のcssの幅解除)
- css_frameworkの幅があった時に解除させる用

### mt10,pb10,flex_fs_c,vt_t_r,ic,f_eq
- 頻出系のクラス。頻度が高いため省略形で。
- mt10 → margin-top:10px
- pb10 → padding-bottom:10px
- flex_fs_c → justify-content:center,align-items:center
- vt_t_r → vertical-align:top,text-align:right
- f_eq → flex:1 1 0
- d-no → display:none;
