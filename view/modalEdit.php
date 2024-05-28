<?php
require_once ("../controller/ControllerEdit.php");

$id = filter_input(INPUT_GET, 'id');
$edit = new editController($id);
?>

<form class="hidden flex-col w-72 items-center py-8 pt-20 text-white" method="post"
    action="../controller/ControllerEdit.php?id=<?php echo $id; ?>" id="forms"
    onsubmit="validar(document.form); return false;">
    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="nome" name="nome"
        placeholder="Nome do Produto" value="<?php echo $edit->getNome(); ?>" required autofocus>
    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="preco" name="preco" placeholder="Preço"
        value="<?php echo $edit->getPreco(); ?>" required>
    <input class="bg-inherit rounded-xl border-2 my-2 mx-6" type="text" id="quantidade" name="quantidade"
        placeholder="Quantidade" value="<?php echo $edit->getQuantidade(); ?>" required>
    <div class="flex items-center justify-center mt-6">
        <button id="sair" type="button"
            class="bg-inherit border-[#00B65C] border-[0.15rem] text-white px-6 py-1 mr-8 rounded-[0.8rem] hover:bg-[#00B65C] ">Sair</button>
        <button id="salvar" type="submit" name="submit"
            class="bg-inherit border-[#00B65C] border-[0.15rem] text-white px-6 py-1 rounded-[0.8rem] hover:bg-[#00B65C] ">Editar</button>
    </div>
</form>