<div>
    <form action="choise.php" method="post">
        <div class="form__choise-header">
            <h1><?=$_SESSION['user_name']?>, !Tu cuenta ha sido creada con éxito!</h1>
            <h2>¿Qué le trajó a LaBoheme?</h2>
        </div>

        <div class="form__choise-body">

            <div class="choise-buy">
                Buscó Comprar Servicios
                <input type="checkbox" name="ckbox_buy" id="ckbox-buy">
            </div>

            <div class="choise-sell">
                Buscó Vender Mis Servicios
                <input type="checkbox" name="ckbox_sell" id="ckbox-sell">
            </div>

        </div>

        <div class="form__choise-footer">
            <button type="submit" class="choise__btn-later">Más Tarde</button>
            <button type="submit" class="choise__btn-next">Siguiente</button>
        </div>
    </form>
</div>