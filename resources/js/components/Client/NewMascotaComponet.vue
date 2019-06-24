<template>
    <div class="card">
        <div class="card-header">
            <h3> Nueva Mascota</h3>
        </div>
        <form v-on:submit.prevent="newReceta">
            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Rut Dueño</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="11111111-1" v-model="ruts">
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-6">
                    <label>Tipo</label>
                    <select class="form-control" v-model="tipo">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label>Raza</label>
                        <select class="form-control" v-model="raza">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label >num. Chip</label>
                <input type="number" class="form-control" v-model="chip">
            </div>
            <div class="form-group col-md-12">
                <label >Nombre</label>
                <input type="text" class="form-control" v-model="nombre">
            </div>
            <button type="submit" class="btn-lg btn-block btn btn-danger">Guardar</button>
        </form>

    </div>
</template>

<script>
    export default {
        name: "NewMascotaComponet"
    }
</script>

<style scoped>

</style>