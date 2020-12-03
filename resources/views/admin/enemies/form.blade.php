@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value="{{ $enemy->name }}" @endisset placeholder="Ingrese un nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($enemy) value="{{ $enemy->hp }}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>
<div class="form-group">
    <label for="atk">Ataque</label>
    <input type="number" class="form-control" id="atk" name="atk" @isset($enemy) value="{{ $enemy->atk }}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($enemy) value="{{ $enemy->def }}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($enemy) value="{{ $enemy->luck }}" @endisset placeholder="Ingrese los puntos de suerte" required>
</div>
<div class="form-group">
    <label for="luck">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($enemy) value="{{ $enemy->coins }}" @endisset placeholder="Ingrese la cantidad de monedas" required>
</div>
<div class="form-group">
    <label for="luck">Experiencia</label>
    <input type="number" class="form-control" id="xp" name="xp" @isset($enemy) value="{{ $enemy->xp }}" @endisset placeholder="Ingrese los puntos de experiencia" required>
</div>
