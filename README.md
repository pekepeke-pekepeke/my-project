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
　　<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> を<head> に追加。
2.　HTML に canvas 要素を追加<canvas id="myChart"></canvas>
3．JavaScript で設定
　　- インスタンスを作成
　　- データを設定（PHP から取得して整形）
　　- オプションを定義
　　- グラフを描画
　　const ctx = document.getElementById('myChart').getContext('2d');
　　new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['A', 'B', 'C', 'D'],
        datasets: [{
            label: 'サンプルデータ',
            data: [10, 20, 30, 40],
            backgroundColor: 'rgba(75, 192, 192, 0.6)'
        }]
    }
});

