<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-03 14:26:36 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/stats3.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:1310216560527623dc70b950-64366333%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'2b1770a161aad6122bccfe286eb59bd8ca6ac151' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/stats3.tpl',
						1 => 1383485182,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '1310216560527623dc70b950-64366333',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_527623dc885778_52269875',
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527623dc885778_52269875')) {function content_527623dc885778_52269875($_smarty_tpl) {?><h3>Suivi
	par Formation</h3>

<div align="center">
	<fieldset class="mwfieldset1" style="width: 100%">

		<legend>Choisir les les dates </legend>
		<table style="width: 100%;">
			<tr>
				<td align="right">Date début</td>
				<td style="vertical-align: middle;">
				
				<td><input type="text" id="DATE_BEG" name="DATE_BEG"
					style="width: 80px" readonly>
				
				<td></td>
				<td align="right">Date fin</td>
				<td style="vertical-align: middle;">
				
				<td><input type="text" id="DATE_END" name="DATE_END"
					style="width: 80px" readonly>
				
				<td></td>
				<td align="right"></td>
				<td style="vertical-align: middle;">
				
				<td><a class="btn btn-mini" onclick="getStat3();"><i
						class="icon-search"></i></a>
				
				<td></td>
			</tr>
		</table>
	</fieldset>


	<div align="center" class='scrolPage2'>

		<table id="tablePrev" name="tablePrev"
			class="table table-hover table-bordered table-condensed">

		</table>

		</table>


	</div>



</div>
<?php }} ?>