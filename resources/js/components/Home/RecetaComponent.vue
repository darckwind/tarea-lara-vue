<template>
    <div class="card">
        <div class="card-header">
            Folio receta: {{receta.folio}}
            <br>
            cliente: {{receta.cliente}}
            <br>
            costo: {{receta.costo}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Farmaco: {{receta.farmaco}}</li>
            <li class="list-group-item">indicacion: {{receta.indicacion}}</li>
        </ul>
        <a href="#" class="btn btn-danger">Delete</a>
    </div>

</template>

<script>
    export default {
        props:['receta'],
        data(){
            return{

            }
        },
        name: "RecetaComponent"
    }
</script>

<style scoped>

</style>