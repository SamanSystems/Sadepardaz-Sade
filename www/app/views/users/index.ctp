<?php

echo '<div class="content_title">
		<h2>افزايش اعتبار آنلاين</h2>
	  </div>
		
		<div class="content_content">'.
			$form->create('Onlinetran',array('url' => array('controller'=>'users', 'action' =>'index'))).
			$form->input('name').
			$form->input('email').
			$form->input('amount').
			$form->input('desc').
			$form->end(__("Add Fund",true)).	
		'</div>';
?>