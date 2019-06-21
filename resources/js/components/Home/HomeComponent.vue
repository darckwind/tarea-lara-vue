<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <receta-component></receta-component>
            </div>
            <div class="col-md-3">
                <total-component v-for=""></total-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
