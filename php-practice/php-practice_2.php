<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo "$i\n";
    }
}

// Q2-1 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

// Q2-2

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $index => $info) {
    $index++; // 1番目から始まるように
    echo $index . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
}

// Q2-3
$personalinfos = [
    [
        "name" => "Aさん",
        "mail" => "aaa@mail.com",
        "tel" => "09011112222"
    ],
    [
        "name" => "Bさん",
        "mail" => "bbb@mail.com",
        "tel" => "08033334444"
    ],
    [
        "name" => "Cさん",
        "mail" => "ccc@mail.com",
        "tel" => "09055556666"
    ]
];

$ageList = [25, 30, 18];
foreach ($personalinfos as $key => $value) {
    $personalinfos[$key]["age"] = $ageList[$key];
}

var_dump($personalinfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }

    public function displayInfo()
    {
        echo "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。";
    }
}

$student = new Student(120, '山田');

$student->displayInfo();

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo "{$this->studentName}は{$class}の授業に参加しました。学籍番号：{$this->studentId}";
    }

    public function displayInfo()
    {
        echo "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
echo (new DateTime())->modify('-1 month')->format('Y-m-d');

// Q5 定義済みクラス-2
echo "あの日から" . (new DateTime())->diff(new DateTime('1992-04-25'))->days . "日経過しました。";
?>