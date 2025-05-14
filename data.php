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
