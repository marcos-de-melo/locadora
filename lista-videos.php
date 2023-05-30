<h2>Lista de Vídeos</h2>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Duração do Filme</th>
            <th>Valor da Locação</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbfilmes";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?=$dados["idFilme"]?></td>
                <td><?=$dados["tituloFilme"]?></td>
                <td><?=$dados["duracaoFilme"]?></td>
                <td><?=$dados["valorLocacao"]?></td>
                <td><?=$dados["idCategoria"]?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>