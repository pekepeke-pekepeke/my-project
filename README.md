# my-project
##概念
このプロジェクトはCanvasとchart.jsについて復習するために作成しました
##フローチャート
<img width="100%" alt="無題" src="https://github.com/user-attachments/assets/1c76619b-93c8-4a17-8c37-5d6f3dc6cd45" />
##目的
1.	Chart.js を利用してグラフを描画
2.	PHP でデータを JSON 形式に変換
3.	JavaScript でデータを取得し、グラフを描画
##手順
1． Chart.js を読み込む
script src="https://cdn.jsdelivr.net/npm/chart.js" をheadに追加。
2.　HTML に canvas 要素を追加id="myChart"
3．JavaScript で設定
- インスタンスを作成
- データを設定（PHP から取得して整形）
- オプションを定義
- グラフを描画
##基本用語
- Canvas – HTMLの <canvas> 要素を使ってグラフを描画する仕組み
- Chart Configuration – チャートの種類、データ、オプションを設定する構造 (type, data, options)
- Dataset – チャートに表示するデータのセット（複数のデータを持たせることが可能）
- Labels – X軸やY軸に表示するラベル（データポイントの名前）
- Options – グラフの外観や動作をカスタマイズするための設定
##グラフの種類
- Line Chart – 折れ線グラフ (type: 'line')
- Bar Chart – 棒グラフ (type: 'bar')
- Pie Chart – 円グラフ (type: 'pie')
- Radar Chart – レーダーチャート (type: 'radar')
- Scatter Chart – 散布図 (type: 'scatter')
##カスタマイズ関連- Responsive – グラフのサイズを自動調整する機能 (responsive: true)
- Animation – グラフの描画時にアニメーション効果を設定 (animation: { duration: 1000 })
- Tooltip – データポイントにカーソルを合わせたときの情報表示 (tooltips: { enabled: true })
- Legend – グラフの凡例 (legend: { display: true })
- Scales – 軸の設定 (scales: { xAxes, yAxes })
##データ操作
- Update – グラフのデータを変更・再描画する方法 (chart.update())
- Destroy – グラフを削除して、新しいチャートを作成 (chart.destroy())
- Add Data – 動的にデータを追加する (chart.data.datasets.push(...))
- Remove Data – データポイントを削除 (chart.data.labels.pop(); chart.update();)
- Plugins – 独自の拡張機能を追加 (Chart.plugins.register(customPlugin))
