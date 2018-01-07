<?php
session_start();
?>
<?php
if (isset($_SESSION['k_username'])){

}else{
    echo '<script language="JavaScript">
location.href="../inc/login.php";
</script>';
}

?>
<br>
<br>
<br>
<br>
<h1 class="text-center"><span class="icon-android">Inventario</h1>

<div class="container" >
    <div class="row">
        <div class="form-control">
            <form method="post">
                <h3 class="text-center">Ingresar Articulo</h3>
                <label>Articulo</label>
                <input name="Articulos" id="articulos" placeholder="Ingrese palabras claves del articulo" size="50"><br><br>
                <label>Comprados</label>
                <input name="Comprados" id="comprados" placeholder="Cantidad de articulos comprados"><br><br>
                <label>Precio sin IVA</label>
                <input name="PrecioSI" id="Preciosi" placeholder="Ingrese precio sin IVA"><br><br>
                <button id="enviar" onclick="Form()">Envíar</button>
            </form>
        </div>

        <center>
            <div class="datagrid">
                <table>
                    <thead>
                    <tr class="titulo">
                        <td>
                            Articulo
                        </td>
                        <td>
                            Comprados
                        </td>
                        <td>
                            Vendidos
                        </td>
                        <td>
                            Disponibles
                        </td>
                        <td>
                            Precio S/I
                        </td>
                        <td>
                            Precio Sugerido
                        </td>
                        <td>
                            Precio Venta Acordado
                        </td>
                    </tr>
                    </thead>
                    <tbody id="resultSearch">

                    </tbody>
                </table>
            </div>
        </center>
    </div>
</div>
<script>


    function Form() {

        var Articulos = document.getElementById("articulos").value;
        var Comprados = document.getElementById("comprados").value;
        var PrecioSI = document.getElementById("Preciosi").value;

        //alert(Articulos+" "+Comprados);

        var art = new Art(Articulos, Comprados, PrecioSI, "../inc/Insertar.php");
        //inicializamos
        art.addArticulos();
    }

    function Art(Articulos,Comprados,PrecioSI,action) {
        this.action=action;
        this.Articulos =Articulos;
        this.Comprados =Comprados;
        this.PrecioSI =PrecioSI;
    }

    Art.prototype.addArticulos = function() {
        alert(this.Articulos+" "+this.Comprados);

        //usamos la llamada AJAX para practicar, ya que el metodo se puede hacer facilmente desde el formulario con action
        $.ajax({
            type:"POST",
            url:this.action,
            data:{
                Articulos:this.Articulos,
                Comprados:this.Comprados,
                PrecioSI:this.PrecioSI
            },
            success:function(response) {
                if(response){
                    //$("#resultSearch").html(response);
                    console.log(response);
                    $("#resultSearch").html(response);
                    //this.action="/consulta.php";
                    //this.Articulos="";
                    //Usuarios.prototype.buscarUsuarios();
                }
            }
        })
    };




</script>
<br>
<br>
<div ng-include=" '../plantillas/menu.php' "></div>
