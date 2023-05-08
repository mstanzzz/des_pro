<?php
if(!isset($tab))$tab='feat';
if(!isset($strip))$strip=0;

?>

<ul class="nav nav-tabs">

<li <?php if($tab=='feat') echo "class='active'"; ?>>
<a  href="<?php echo SITEROOT;?>manage/catalog/specs-feat/feats-list.php?strip=<?php echo $strip; ?>">Showroom Product Features</a>
</li>

<li <?php if($tab=='acces') echo "class='active'"; ?>>
<a href="<?php echo SITEROOT;?>manage/catalog/specs-feat/s-f-acces-list.php?strip=<?php echo $strip; ?>">Showroom Product Accessories</a>
</li>

</ul>





