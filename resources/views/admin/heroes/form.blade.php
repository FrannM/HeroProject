@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($hero) value="{{ $hero->name }}" @endisset placeholder="Ingrese un nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($hero) value="{{ $hero->hp }}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>
<div class="form-group">
    <label for="atk">Ataque</label>
    <input type="number" class="form-control" id="atk" name="atk" @isset($hero) value="{{ $hero->atk }}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($hero) value="{{ $hero->def }}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value="{{ $hero->luck }}" @endisset placeholder="Ingrese los puntos de suerte" required>
</div>
<div class="form-group">
    <label for="luck">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($hero) value="{{ $hero->coins }}" @endisset placeholder="Ingrese la cantidad de monedas" required>
</div>
