<?php
	$atribs=array();
	foreach ($atributs as $atribut):
		$atribs[$atribut['Atribut']['id']]=$atribut['Atribut']['name'];
	endforeach;

	foreach($profileAttributes as $profileAttribute):
?>

<tr class="attribut-detail" >
	<th>
		<label><?php echo $atribs[$profileAttribute['SiteProfileDetail']['atribut_id']]; ?></label>
	</th>
	<td>
		
		<input name="<?php echo 'data[SiteProfile][coba'.$profileAttribute['SiteProfileDetail']['id'].']'; ?>" value="<?php echo $profileAttribute['SiteProfileDetail']['value']; ?>" size="43" type="text">
		
	</td>
</tr>

<?php endforeach; ?>