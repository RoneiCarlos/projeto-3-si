goCart = () => {
    if(confirm('Deseja finalizar as compras?')){
        window.location.href = 'carrinho.php';
    }
}

//request ajax para passar o id do café respectivo ao clicar nobotão
function addCart (id_cafe) {
    $.post('addCart.php', {
        id_cafe: id_cafe
    });
}

function func1()
{
alert("Café adicionado ao carrinho!");
}