
<section>
    <header>
        <h1>Glossary</h1>
        <h2><?= $name ?></h2>
    </header>
    
    <div>
        <table>

            <?php 
            foreach($model as $item) {
                $term = $item->term;
                $definition = $item->definition;
                echo "<tr>
                        <td>$term</td>
                        <td>$definition</td>
                      </tr> 
                    ";
            }
            ?>
        </table>
    </div>
</section>