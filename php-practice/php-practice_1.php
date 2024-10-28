<?php
// Q1 変数と文字列
<?php

$nakai = "中居";

echo "私の名前は".$nakai."です。";
// Q2 四則演算
<?php

$x = 5;
$y = 4;

var_dump($x * $y);
var_dump($x * $y / 2);
// Q3 日付操作
<?php

$year = date('Y');
$month = date('m');
$day = date('d');
$hour = date('H');
$minute = date('i');
$second = date('s');

echo "現在時刻は、" . $year . "年" . $month . "月" . $day . "日 " . $hour . "時" . $minute . "分" . $second . "秒です。";
// Q4 条件分岐-1 if文
<?php

$device = "mac";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}
// Q5 条件分岐-2 三項演算子
<?php

$age = 17;

if ($age >= 18) {
    echo "成人です";
} else {
    echo "未成年です";
}
// Q6 配列
<?php

$kanto = ["茨城県","群馬県","栃木県","千葉県","埼玉県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";
// Q7 連想配列-1
<?php

$q7 = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($q7 as $city) {
    echo $city . "\n";
}
// Q8 連想配列-2
<?php

$q7 = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($q7 as $prefecture => $city) {
    if ($prefecture == '埼玉県') {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    }
}
// Q9 連想配列-3
<?php

$q7 = ['北海道' => '札幌市', '沖縄県' => '那覇市', '東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

$kanto = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($q7 as $prefecture => $city) {
    if (array_key_exists($prefecture, $kanto)) {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }
}
// Q10 関数-1
<?php

function hello($name) {
    return $name . "さん、こんにちは。";
}
echo hello("金谷") . "\n";
echo hello("安藤") . "\n";
// Q11 関数-2
<?php

function calcTaxInPrice($price) {
    $taxRate = 0.10;
    $taxInPrice = $price + ($price * $taxRate);
    return $taxInPrice;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";
// Q12 関数とif文
<?php

function distinguishNum($num) {
    if ($num % 2 == 0) {
        return "{$num}は偶数です。";
    } else {
        return "{$num}は奇数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";
// Q13 関数とswitch文
<?php

function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";