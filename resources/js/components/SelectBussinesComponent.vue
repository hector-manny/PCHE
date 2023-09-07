<template>
    <div
        class="bg-white d-flex flex-column justify-content-center align-items-center col-12 col-xs-12" style="margin-top: 8%;">
        <!-- Imagen centrada -->
        <div class="center-image" style="margin-bottom: 5%;">
            <img src="assets/img/latinMobile.png" alt="logo" class="w-75" />
        </div>
        <form class="col-12 d-flex flex-column justify-content-center">
            <div class="col-12 d-flex flex-column justify-content-center">
                <br />
                <h2 class="text-center">SELECCIÓN DE EMPRESAS</h2>
                <br />
                <!-- Dropdown -->
                <div class="form-group d-flex justify-content-center">
                    <select
                        v-model="selectedOption"
                        class="col-9 form-control"
                        style="height: 50px"
                    >
                        <option value="opcion1">LATMOBILE</option>
                        <option value="opcion2">O2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                </div>
                <br />
                <div class="col-12 d-flex justify-content-center">
                    <!-- Botón "Seleccionar" -->
                    <button
                        @click="seleccionar"
                        class="btn btn-primary btn-block"
                        style="width: 25%"
                    >
                        Seleccionar
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedOption: "Seleccione La empresa", // Opción predeterminada seleccionada
        };
    },
    methods: {
        seleccionar() {
            // Manejar la acción de selección aquí
            alert("Opción seleccionada: " + this.selectedOption);
        },
    },
};
</script>

<style scoped>
.center-image {
    text-align: center;
}

/* Estilos adicionales según tus preferencias */
</style>
