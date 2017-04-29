<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Магазин</title>
</head>

<body bgcolor="#a1d362">

<table align="center" width="900" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
	<td>
        <div id="header"></div>
        <div id="menu">
            <div><a href="index.php">Главная</a></div>
            <?
                $categories = get_cat();
                foreach($categories as $item):
            ?>
                <div><a href="index.php?view=cat&id=<?=$item['cat_id'];?>"><?=$item['name'];?></a></div>
            <?endforeach;?>
            <div id="cart"><a href="index.php?view=cart">Ваша корзина (<?=$_SESSION['total_items'];?>)</a> - <?=number_format($_SESSION['total_price'],2);?>грн.</div>
        </div>
    </td>
</tr>
<tr>
	<td id="main-block" valign="top">
    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/shop/views/pages/'.$view.'.php'); ?>
    
    
    
        
        <div style="clear: both;"></div>
        
        
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">Alchamy@ukr.net ЧП"Литвин"</div>
        </div>
    </td>
</tr>
</table>

</body>
</html>