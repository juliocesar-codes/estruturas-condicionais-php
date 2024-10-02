<section>
    <h3>IF/ELSE</h3>
    <p>Digite um número e clique em OK para saber se é par ou impar:</p>
    <form action="ifelse.php" method="post">
        <input type="text" name="numero" id="numero" placeholder="Digite um número" required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>SWITCH/CASE</h3>
    <p>Selecione uma tecnologia e linguagem e clique em OK para conhecer suas características:</p>
    <form action="switch.php" method="post">
        <select name="linguagens" id="linguagens">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
            <option value="php">PHP</option>
            <option value="sql">SQL</option>
            <option value="laravel">Laravel</option>
        </select>
        <input type="submit" value="OK">
    </form>
</section>