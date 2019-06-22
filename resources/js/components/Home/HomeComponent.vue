<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <receta-component v-for="receta in recetas" :key="receta.folio" :receta="receta"></receta-component>
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
                    'folio': 1,
                    'cliente':'narnia',
                    'costo':2,
                    'farmaco':'aaaaaa',
                    'indicacion':'asdasdasd'
                }]
            }
        },
        components: {NewRecetaComponent},
        methods:{
            addReceta(receta){
                this.recetas.push(receta);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
