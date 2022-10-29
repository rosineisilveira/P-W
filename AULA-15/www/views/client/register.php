<h1>Cadastro de clientes</h1>
<form action="?controller=client&action=registerView" method="post">
    
    <div class= "mb-3 mt-3" >
        <label class = "form-label" for="">Nome</label>
        <input class = "form-control" type="text" name= "name">
    </div>
    <div class= "mb-3 mt-3" >
        <label class = "form-label" for="">Login</label>
        <input class = "form-control" type="text" name= "login">
    </div>

    <div class= "mb-3 mt-3" >
        <h5>GENERO</h5>
        <input type="radio" id="masculino" name="gender" value="masculino">
        <label for="masculino">MASCULINO</label><br>
        <input type="radio" id="feminino" name="gender" value="feminino">
        <label for="feminino">FEMININO</label><br>
        <input type="radio" id="outro" name="gender" value="outro">
        <label for="outro">OUTRO</label>
    </div>

    <div class= "mb-3 mt-3" >
        <h5>DESEJO RECEBER NOTIFICAÇÕES</h5>
        <input type="checkbox"  name="accept" value="sim">
        <label for="accept"> Sim</label><br>  
        <input type="checkbox"  name="accept" value="nao">
        <label for="accept"> Não</label><br>   
    </div>
    
    <button class="btn btn-primary" type ="submit" ><Embed>Enviar</Embed></button>

</form>