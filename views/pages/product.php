<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
 
    <tr>
        <td valign="top">
            <div><a href="#"><img src="userfiles/<?=$product['image']?>" alt="" /></a></div>
            <div class="description">
                <div class="product-name"><a href="#"><?=$product['title']?></a></div>
                <div class="product-price">Цена: <?=$product['price']?> грн.</div>
            </div>
        </td>
        <td valign="top">
            <div><?=$product['description']?></div>
            <dir><dir><h4 align="center"><a href="index.php?view=add_to_cart&id=<?=$product['id']?>">Добавить в корзину</a></h4>
        </dir></dir>
        </td>
    </tr>
</table>