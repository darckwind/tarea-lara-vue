<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <receta-component v-for="(receta, index) in recetas" :key="receta.folio" :receta="receta" @delete="deleteReceta(index)" style="margin-bottom:4%;"></receta-component>
            </div>
            <div class="col-md-4">
                <total-component></total-component>
                <br>
                <new-receta-component @new="addReceta"></new-receta-component>
            </div>

        </div>
    </div>
</template>

<script>
    import NewRecetaComponent from "./NewRecetaComponent";
    export default {
        data(){
            return{
                recetas:[{
                    'folio': 2,
                    'cliente':'narnia',
                    'costo':2,
                    'farmaco':'aaaaaa',
                    'indicacion':'asdasdasd',
                    'cantidad':3
                }]
            }
        },
        components: {NewRecetaComponent},
        methods:{
            addReceta(receta){
                this.recetas.push(receta);
            },
            deleteReceta(index){
                this.recetas.splice(index, 1);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
