<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:21:47 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/stats2.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:18190850195272f41b77c192-29675018%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'498cca1086cb33a0fac99c83e72cebea4cc9b083' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/stats2.tpl',
						1 => 1383264567,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '18190850195272f41b77c192-29675018',
		'function' => array (),
		'variables' => array (
				'listStat2' => 0,
				'row' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f41b7b83e0_59155646' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f41b7b83e0_59155646')) {function content_5272f41b7b83e0_59155646($_smarty_tpl) {?><h3>Prévisions
	par Etudiant</h3>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Prévisions</th>
			<th>Paiements</th>
		</tr>
<?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['listStat2']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_NOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_PRENOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PREVISION'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PAIEMENT'];?>
</td>
		</tr>
<?php } ?>
 
</table>
</div>



</div>
<?php }} ?>