<?php require_once ("../controller/ControllerList.php") ?>
<?php require_once ("../controller/ControllerEdit.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Estoque - Digital Zone</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body class="bg-[#101E24] flex flex-col w-full h-[100vh] ">
    <?php include ('header.php') ?>

    <div class="flex flex-col w-full h-full pt-10 items-center">
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
                    echo "<td class='flex w-1/6 justify-center items-center'><a href='modalEdit.php?id=" . $item['id'] . "' data-toggle='modal' data-target='#modalEdit'>Editar</a> 
                    | <a href='delete.php?id=" . $item['id'] . "'>Deletar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <?php if (isset($_GET['addproduto']) && $_GET['addproduto'] == 'true'): ?>
            <div class="absolute w-full h-full flex justify-center items-center bg-black bg-opacity-45">
                <form class="flex flex-col w-90 items-center py-8 pt-20 text-white bg-gray-700" method="post "
                    action="../controller/ControllerInsert.php" id="forms">
                    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="nome" name="nome"
                        placeholder="Nome do Produto" required autofocus>
                    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="preco" name="preco"
                        placeholder="Preço" required>
                    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="quantidade" name="quantidade"
                        placeholder="Quantidade" required>
                    <div class="flex items-center justify-center mt-6">
                        <button type="button" onclick="location.href='index.php'"
                            class="bg-inherit border-[#00B65C] border-[0.15rem] text-white px-6 py-1 mr-8 rounded-[0.8rem] hover:bg-[#00B65C]">Sair</button>
                        <button id="salvar" type="submit"
                            class="bg-inherit border-[#00B65C] border-[0.15rem] text-white px-6 py-1 rounded-[0.8rem] hover:bg-[#00B65C]">Salvar</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>

        <?php include ('modalEdit.php') ?>
    </div>

    <?php include ('footer.php') ?>

</body>

</html>