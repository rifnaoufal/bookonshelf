<link rel="stylesheet" href="stylesheet.css">
<div class="container w3-row-padding w3-padding-16 w3-center">
    <?php
        include 'private/connection-example.php';
        $sql = "SELECT id, naam, Genre, ISBN, schrijver, Taal, paginas, exemplaren, foto FROM books";
        $sth = $conn->prepare($sql);
        $sth->execute();
        while ($info = $sth->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="w3-quarter">
            <img src="<?=$info['foto'] ?>"style="width:40%">
            <h3><?= $info['naam']  ?></h3>
            <h3><?= $info['Genre']  ?></h3>
            <h3><?= $info['ISBN']  ?></h3>
            <h3><?= $info['schrijver']  ?></h3>
            <h3><?= $info['Taal']  ?></h3>
            <h3><?= $info['paginas']  ?></h3>
            <h3><?= $info['exemplaren']  ?></h3>
            <button type="button">Bewerken</button>
        </div>
    <?php
        }
    ?>
<!--    <button type="boektoevoegen" style="height: 10%">BOEK TOEVOEGEN</button>-->
    <form method="POST" action="../index.php?page=boekentoevoegen">
        <input type="submit"/>
    </form>
</div>