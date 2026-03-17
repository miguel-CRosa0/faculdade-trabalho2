<select name="ano">
    <?php
    // ao colocar += (numero) ele vai somar aquele numero específico até chegar no valor desejado //
    for ($i = 1950; $i <= 2026; $i++) {
        echo "<option value='$i'>$i</option>";
    }

    // Outro modo de fazer //
    // for ($i = 2026; $i >= 1900; i--){}
    ?>
</select>