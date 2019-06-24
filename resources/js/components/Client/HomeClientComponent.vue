<template>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <client-component></client-component>
            <div class="col-md-4">
                <new-client-component></new-client-component>
                <br>
                <new-mascota-component></new-mascota-component>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "HomeClientComponent"
    }
</script>

<style scoped>

</style>