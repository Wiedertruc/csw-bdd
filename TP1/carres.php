<?php 
	function carre($n){
		return $n.'<sup>2</sup>='.$n*$n;
	}
?>
<ul>
<?php
	for ($i=1;$i<=30;$i++){
		echo '<li>',carre($i),'</li>';
	}
?>
</ul>