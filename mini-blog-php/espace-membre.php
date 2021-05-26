<?php
include('view/header.php');
include('config/membres.php');
?>


<h2>Bienvenue dans l'espace membre</p>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>login</th>
            <th>password</th>
        </tr>
    </thead>    
    <tbody>
        
        <?php foreach(getMembers() as $member) : ?>
            <tr>
                <td><?php echo $member['id'] ; ?></td>
                <td><?php echo $member['login'] ; ?></td>
                <td><?php echo $member['password'] ; ?></td>
            </tr>
        <?php endforeach ?>
        
    </tbody>

</table>



<?php
    include('view/footer.php');
?>
