<template>
    <div class="card">
        <div class="card-header">
            <h3> Nuevo Client</h3>
        </div>
        <form v-on:submit.prevent="newReceta">
            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Rut Cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="11111111-1" v-model="rut">
            </div>
            <div class="form-group col-md-12">
                <label>Nombre:</label>
                <input type="text" class="form-control" v-model="nombre">
            </div>
            <div class="form-group col-md-12">
                <label>Direccion:</label>
                <input type="text" class="form-control" v-model="direccion">
            </div>
            <button type="submit" class="btn-lg btn-block btn btn-danger">Guardar</button>
        </form>

    </div>
</template>

<script>
    export default {
        name: "NewClientComponent"
    }
</script>

<style scoped>

</style>