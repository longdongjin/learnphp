<?php
//下拉表单
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
    if ($q == "RUNOOB") {
        echo "菜鸟教程<br>http://www.runoob.com";
    } elseif ($q == "GOOGLE"){
        echo "谷歌搜索<br>http://www.google.com";
    }elseif($q =='TAOBAO')
    {
        echo '淘宝<br>http://www.taobao.com';
    }else{
        echo "请选择一个网站";
    }
}
?>
<form action="" method="get">
    <select name="q">
        <option value="">请选择一个站点</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="taobao">Taobao</option>
    </select>
    <input type="submit" value="提交">
</form>
