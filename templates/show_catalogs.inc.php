<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/
?>
<table class="tabledata" cellspacing="0" cellpadding="0">
<tr>
	<td colspan="5">
	<?php require Config::get('prefix') . '/templates/list_header.inc.php'; ?>
	</td>
</tr>
<tr class="table-header">
	<th><?php echo _('Name'); ?></th>
	<th><?php echo _('Path'); ?></th>
	<th><?php echo _('Last Update'); ?></th>
	<th><?php echo _('Last Add'); ?></th>
	<th><?php echo _('Actions'); ?></th>
</tr>
<?php 
	foreach ($object_ids as $catalog_id) { 
		$catalog = new Catalog($catalog_id); 
		$catalog->format(); 
?>
<tr class="<?php echo flip_class(); ?>" id="catalog_<?php echo $catalog->id; ?>">
	<?php require Config::get('prefix') . '/templates/show_catalog_row.inc.php'; ?>
</tr>
<?php } ?>
<tr>
	<td colspan="5">
	<?php require Config::get('prefix') . '/templates/list_header.inc.php'; ?>
	</td>
</tr>
</table>