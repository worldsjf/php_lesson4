<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkEven($number) {
    $absNum = abs($number);
    if ($absNum %2==0 ) {
        return "Số $absNum là số chẵn";
    } else {
        return "Số $absNum  là số lẻ";
    }
}
echo checkEven(-13);
echo checkEven(12);
echo "<br>";
//Bài 2:Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
function ratings($midtern,$end){
    $avg=($midtern*0.3)+($end*0.7);
    if($avg>=9.0){
        return "Xếp hạng Xuất sắc";
    }else 
    if($avg>=7.0){
        return "Xếp hạng Giỏi";
    }else 
    if($avg>=5.0){
        return "Xếp hạng Khá";
    }else 
    if($avg<5.0){
        return "Xếp hạng Trung Bình-Yếu";
    }
}
$result=ratings(9,8.5);
echo "Học sinh:".$result;
echo "<br>";
//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYear($year){
    if($year%2==0){
        return "chẵn";
    }else{
        return "lẻ";
    }
}
$presentYear=checkYear(date("Y"));
echo "Năm nay là năm " . $presentYear." ";
echo "<br>";
//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function prints(){
    for($i=1;$i<=100;$i++){
        echo $i ."<br>";
    }
}
prints();
echo "<br>";
//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.
function printNumbers($i){
    if ($i % 2 === 0) {
        echo "<b>" . $i . "</b> ";
    } else {
        echo $i ." <br>";
    }
}
for ($i=1;$i<=100;$i++){
    printNumbers($i);
}
echo "<br>";
//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function yearsArray($array){
    foreach($array as $year){
        echo $year . "<br> ";
    }
}
$years=array(1990,1991,1992,1993,1994,1995);
yearsArray($years);

?>