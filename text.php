<?php
require "db.php";
require "libs.php";
$data =$_POST;
?>
<div class="container">
Ваши мнения!<br> <div>
<?php
$query = R::findAll('post');
    // а можно и так  $query = R::getAll( 'SELECT * FROM jobs' ); 
    echo($query); ?>

<table border="1" align="center">
    <tr>
        <td> id </td>
        <td> login </td>
        <td> mnenie </td>
        
    </tr>
<?php
        foreach($query as $item): ?>

<tr>
            <td><?=$item['id']?></td>
            <td><?=$item['login']?></td>
            <td><?=$item['mnenie']?></td>
            
        </tr>

        
    

<?php
            endforeach;
        ?>
