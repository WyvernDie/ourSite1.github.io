<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла



if(($_POST['action']== 'edit') or ($_SESSION['transition'] )){
    $id = $_POST['id'];
    $query = "SELECT * FROM footermain WHERE id = '$id'"; //строка запроса на языке SQL.
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $footerDatas = array();
    $k = mysqli_num_rows($result);
    $i=0;
    while ($i < $k) {
        $footerDatas[] = mysqli_fetch_array($result);
        $i++;
    }
}


mysqli_close($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../../CSS/game.css"/>
    <link rel="stylesheet" href="../../../CSS/admin.css"/>
    <link rel="stylesheet" href="../../../CSS/footerStyles.css"/>
</head>
<body>
<a href="../../../index.php" class="main"><h1>На Главную</h1></a>
<a href="mailFooterEditing.php" class="main"><h1>На предыдушую </h1></a>

<form method="post" action="footerInfoEditing.php" enctype="multipart/form-data">
    <table>
        <?
        foreach ($footerDatas as $footerData) {
            ?>
            <tr>
                <td><? echo $footerData['description']?></td>
                <td><? echo $footerData['infoLink']?></td>
                <td colspan="2"><? echo $footerData['infoDescription']?></td>
            </tr>
        <? } ?>
        <tr>
            <td>
                <input name="nameFooter">
                <input class="id" name="id" value="<? echo $footerData['id']; ?>">
            </td>

            <td>
                <input name="namFooter">
            </td>

            <td>
                <input name="naFooter">
            </td>
            <? if($id == 2){?>
                <td>
                    <input name="TypicMail">
                </td>
            <? } ?>

        </tr>
    </table>
    <input type="submit" value="Изменить"/>
</form>


</body>
</html>

