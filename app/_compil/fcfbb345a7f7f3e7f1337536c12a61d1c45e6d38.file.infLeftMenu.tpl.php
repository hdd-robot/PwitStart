<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 17:43:38 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/infLeftMenu.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:14132337935300eabac0aab4-28734193%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'fcfbb345a7f7f3e7f1337536c12a61d1c45e6d38' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/infLeftMenu.tpl',
						1 => 1383220064,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '14132337935300eabac0aab4-28734193',
		'function' => array (),
		'variables' => array (
				'frame' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300eabac1a8a1_86534672' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300eabac1a8a1_86534672')) {function content_5300eabac1a8a1_86534672($_smarty_tpl) {?><br>
<br>
<br>
<div
	style="border: 1px; border-right-style: solid; border-color: silver; min-height: 580px">
	<ul class="nav nav-list">
		<li class="nav-header">Générale</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infFormations'){?>active<?php }?>">
			<a href=">informations>Index>infFormations">Formations&nbsp;&nbsp;</a>
		</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infEtudiants'){?>active<?php }?>">
			<a href=">informations>Index>infEtudiants">Etudiants&nbsp;&nbsp;</a>
		</li>



		<li class="nav-header">Utilisateurs</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infUser'){?>active<?php }?>">
			<a href=">informations>Index>infUser">Connexions&nbsp;&nbsp;</a>
		</li>

	</ul>
</div>
<?php }} ?>