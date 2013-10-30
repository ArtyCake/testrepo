<table>
<tr>
<th>Тема</th>
<th>Лект. часов</th>
<th>Практ. часов</th>
<th>Лаб. часов</th>	
</tr>
<?php foreach($themes as $theme): ?>
<tr>
<td><?php echo nl2br(CHtml::encode($theme->theme)); ?></td>
<td><?php echo $theme->lect_h; ?></td>
<td><?php echo $theme->pract_h; ?></td>
<td><?php echo $theme->lab_h; ?></td>
</tr>
<?php endforeach; ?>
</table>