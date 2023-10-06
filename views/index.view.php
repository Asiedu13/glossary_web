
<section>
    <header>
        <h1>Glossary</h1>
        <h2><?= $name ?></h2>
    </header>
    
    <div>
        <table>
            <?php foreach($model as $item): ?>
                <tr>
                    <td><?= $item->term ?></td>
                    <td><?= $item->definition ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</section>