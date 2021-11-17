<div class="title-page">
            <h2 id="title-list">Registro</h2>
</div>

<div  class="form-content">
    <div>
        <h2>Fromulario de registro:</h2>
    </div>
    
    <form>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" 
                required
                pattern="[A-Za-z0-9\ñÑáéíóú]+( +[A-Za-z0-9\ñÑáéíóú]+)*$" 
                placeholder="Nombre aquí..."/>
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" 
                required
                placeholder="Email..."/>
        </div>

        <div>
            <label for="psw">Password</label>
            <input type="password" name="psw" id="psw" 
            pattern="[A-Za-z0-9\ñÑáéíóú]+"
            required>
        </div>

        <div>
            <label for="address">Dirección</label>
            <input type="text" name="address" id="adr" 
            maxlength="30"
            required>
        </div>

        <div>
            <label for="address">Población</label>
            <input type="text" name="address" id="adr" 
            maxlength="30"
            required>
        </div>

        <div>
            <label for="codigo">Código postal</label>
            <input type="text" name="codigo" id="cdg"
            pattern="[0-9]{5}"
            required>
        </div>

        <button class="boton">Enviar</button>

    </form>
</div>