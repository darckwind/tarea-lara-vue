<template>

    <div class="card">
        <div class="card-header">
            <h3> Nueva Receta</h3>
        </div>
        <form v-on:submit.prevent="newReceta">
            <div class="form-group">
                <label for="exampleFormControlInput1">Rut Cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="11111111-1" v-model="ruts">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Farmaco</label>
                <select class="form-control" id="exampleFormControlSelect1" v-model="farmacos">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Indicaciones Tratamiento</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" v-model="indicacions"></textarea>
            </div>
            <button type="submit" class="btn-lg btn-block btn btn-danger">Guardar</button>
        </form>

    </div>

</template>

<script>
    export default {
        data(){
            return{
                ruts:'',
                farmacos:'',
                indicacions:'',
            }
        },
        name: "NewRecetaComponent",
        methods:{
            newReceta(){
                let receta = {
                    folio:1,
                    cliente: this.ruts,
                    costo:2222,
                    farmaco:this.farmacos,
                    indicacion:this.indicacions
                };

                this.$emit('new',receta);
            },
        }
    }
</script>

<style scoped>

</style>