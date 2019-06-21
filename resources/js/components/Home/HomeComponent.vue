<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <receta-component></receta-component>
            </div>
            <div class="col-md-4">
                <total-component></total-component>
                <br>
                <new-receta-component></new-receta-component>
            </div>

        </div>
    </div>
</template>

<script>
    import NewRecetaComponent from "./NewRecetaComponent";
    export default {
        components: {NewRecetaComponent},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
