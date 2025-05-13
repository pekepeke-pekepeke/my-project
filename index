<?php
// 学生情報
$student_info = [
    ["1001", "田中 太郎", "タナカ タロウ", "男", 80, 90, 85, 70],
    ["1002", "佐藤 花子", "サトウ ハナコ", "女", 75, 85, 80, 95],
    ["1003", "鈴木 一郎", "スズキ イチロウ", "男", 90, 80, 70, 85],
    ["1004", "高橋 恵", "タカハシ メグミ", "女", 65, 75, 70, 80],
    ["1005", "山田 健", "ヤマダ ケン", "男", 85, 95, 90, 75]
];
$subject_name = ["学籍番号", "生徒名", "フリガナ", "性別", "数学", "理科", "社会", "英語", "成績合計", "成績平均"];
// 成績の合計と平均を計算
foreach ($student_info as &$student) {
    $total = $student[4] + $student[5] + $student[6] + $student[7];
    $average = round($total / 4, 2); // 小数点第2位まで表示
    array_push($student, $total, $average);
} //配列に追加（成績合計、成績平均）
unset($student); // 参照解除

?>
<?php
// 成績データを取得
$labels = []; //名前空箱
$scores = []; //点数空箱
foreach ($student_info as $student) {
    $labels[] = $student[1]; // 生徒名
    $total = $student[4] + $student[5] + $student[6] + $student[7]; // 成績合計
    $scores[] = $total;
}

// JSON 形式に変換
$json_labels = json_encode($labels);
$json_scores = json_encode($scores);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>学生成績集計アプリ</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.jsの読み込み -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <h1>学生成績集計アプリ</h1>
    <table>
        <tr>
            <?php foreach ($subject_name as $subject) { ?>
                <th><?= $subject ?></th>
            <?php } ?>
        </tr>
        <?php foreach ($student_info as $student) { ?>
            <tr>
                <?php foreach ($student as $data) { ?>
                    <td><?= $data ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <canvas id="scoreChart"></canvas> <!-- グラフ描画領域 -->

    <script>
        // PHP からデータを取得
        const labels = <?= $json_labels ?>;
        const scores = <?= $json_scores ?>;

        // Chart.js を使用してグラフ描画
        const ctx = document.getElementById('scoreChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar', // 棒グラフ
            data: {
                labels: labels,
                datasets: [{
                    label: '成績合計',
                    data: scores,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
