goCart = () => {
    if(confirm('Deseja finalizar as compras?')){
        
        window.location.href = 'carrinho.php';
    }
}


function addCart (id_cafe) {

    $.post('addCart.php', {
        id_cafe: id_cafe
    }, function(response){
        console.log(response);
    });

}