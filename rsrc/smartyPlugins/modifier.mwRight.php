<?php

/**
 *  mwRight
 * @author  hd
 * @param string
 * @return Char
 */
function smarty_modifier_mwRight($string) {
	if ($string == 'ADM') {
		return "Administrateur";
	} else if ($string == 'CON') {
		return "Consultant";
	}
}
