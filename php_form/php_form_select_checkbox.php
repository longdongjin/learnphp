<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if(is_array($q))
{
    $sites = array(
        'RUNOOB' => '菜鸟教程: http://www.runoob.com',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach ($q as $value) {
        echo $sites[$value] . "<br>";
    }
}
?>
<form action="" method="post">
    <input type="checkbox" name="q[]" value="RUNOOB">Runoob<br>
    <input type="checkbox" name="q[]" value="GOOGLE">Google<br>
    <input type="checkbox" name="q[]" value="Taobao">Taobao<br>
    <input type="submit" value="提交">
</form>
