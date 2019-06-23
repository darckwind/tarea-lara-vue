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
            <li class="list-group-item">Farmaco: {{receta.farmaco}}      Uni :{{receta.cantidad}}</li>
            <li class="list-group-item">indicacion: {{receta.indicacion}}</li>
        </ul>
        <button class="btn-block btn btn-danger" v-on:click="onClickDelete()"> Eliminar</button>
    </div>

</template>

<script>
    export default {
        props:['receta'],
        data(){
            return{

            }
        },
        methods:{
            onClickDelete(){
              this.$emit('delete');
          }
        },
        name: "RecetaComponent"
    }
</script>

<style scoped>

</style>