<?php require_once("../controller/ControllerList.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Estoque - Digital Zone</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body class="bg-[#101E24] flex">
    <?php include('header.php') ?>

    <div class="pt-32 flex w-full justify-center">
        <table class="w-[80%]">
            <thead class="flex w-full text-xs text-white uppercase bg-[#0C161B]">
                <tr class="flex w-full justify-between">
                    <th scope="col" class="flex w-1/6 justify-center items-center h-10">ID</th>
                    <th scope="col" class="flex w-1/6 justify-center items-center">Nome produto</th>
                    <th scope="col" class="flex w-1/6 justify-center items-center">Preço</th>
                    <th scope="col" class="flex w-1/6 justify-center items-center">Quantidade</th>
                    <th scope="col" class="flex w-1/6 justify-center items-center">Opções</th>
                </tr>
            </thead>
            <tbody class="flex flex-col text-white w-full">
                <?php
                    $controller = new listController();
                    $itens = $controller->getItens();
                    foreach ($itens as $item) {
                        echo "<tr class='flex w-full justify-between'>";
                        echo "<td class='flex w-1/6 justify-center items-center h-10'>" . $item['id'] . "</td>";
                        echo "<td class='flex w-1/6 justify-center items-center'>" . $item['nome'] . "</td>";
                        echo "<td class='flex w-1/6 justify-center items-center'>" . $item['preco'] . "</td>";
                        echo "<td class='flex w-1/6 justify-center items-center'>" . $item['quantidade'] . "</td>";
                        echo "<td class='flex w-1/6 justify-center items-center'><a href='edit.php?id=" . $item['id'] . "'>Editar</a> | <a href='delete.php?id=" . $item['id'] . "'>Deletar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
