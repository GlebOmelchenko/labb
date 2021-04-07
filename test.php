<?php
class student {
    public $name = "";
public $surname = "";
public $dr = "";
public function validateDate($date, $format = 'd-m-Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
public function __construct(string $name, string $surname, string $dr) {
echo "Родительский конструктор сработал <br>";
$this->name = $name;
$this->surname = $surname;
if($this->validateDate($dr)) {
    $this->dr = $dr;
} else {
    print("Ошибка.<br>");
    exit(0);
}
}
public function getName() {
return "{$this->name}";
}
public function getSurename() {
    return "{$this->surname}";
}
public function getDr() {
    return "{$this->dr}";
}
}

class univer extends student {
public $unik = "";
public function __construct(string $name, string $surname, string $dr, string $unik) {
    echo "Дочерний конструктор сработал <br>";
    parent::__construct($name, $surname, $dr);
$this->unik = $unik;
}
public function print () {
    printf("Имя: %s.<br>", parent::getName());
    printf("Фамилия: %s.<br>", parent::getSurename());
    printf("День рождение: %s.<br>", parent::getDr());
echo "Универ: $this->unik<br>";
}
}


$obj = new univer("Глеб", "Омельченко", "15-01-2002", "КПИ");
$obj->print();
echo "<br>";
$array = array(
    $obj = new univer("Лёня", "Омельченко", "15-10-2000", "КПИ"),
    $obj1 = new univer("Вова", "Омельченко", "15-10-2001", "КПИ")
);
foreach ($array as $arr){
    $arr->print();
}
?>