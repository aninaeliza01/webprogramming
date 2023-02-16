<?php 
$players = array('Virat Kohli', 'Rohit Sharma', 'Shikhar Dhawan', 'Jasprit Bumrah', 'Hardik Pandya'); 
?> 
<table border="1"> 
<tr> 
<th>Name of Indian Cricket Players</th> 
</tr> 
<?php foreach($players as $player): ?> 
<tr> 
<td><?php echo $player; ?></td> 
</tr> 
<?php endforeach;  
?> 
</table> 
