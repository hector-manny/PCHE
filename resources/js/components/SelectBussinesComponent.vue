<template>
  <div class="bg-white d-flex flex-column justify-content-center col-6" style="margin-top: 8%">
    <!-- Imagen centrada -->
    <div class="center-image" style="margin-bottom: 5%">
      <img src="assets/img/latinMobile.png" alt="logo" class="w-50" />
    </div>
    <form>
      <div class="col-12 d-flex flex-column justify-content-center">
        <br />
        <h2 class="text-center">SELECCIÓN DE EMPRESAS</h2>
        <br />
        <!-- Dropdown -->
        <div class="form-group d-flex justify-content-center">
          <select v-model="selectedOption" class="form-select">
            <option value="">Seleccione La empresa</option>
            <option v-for="empresa in empresas" :key="empresa.id" :value="empresa.id">
              {{ empresa.id }} - {{ empresa.nombre }}
            </option>
          </select>
        </div>
        <br />
        <div class="col-12 d-flex justify-content-center">
          <!-- Botón "Seleccionar" -->
          <button
            @click="seleccionar"
            class="btn btn-primary btn-block"
            style="width: 25%"
            type="button"
          >
            Seleccionar
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios'; // Importa Axios

export default {
  data() {
    return {
      selectedOption: "", // Opción predeterminada seleccionada
      empresas: [], // Almacenar las empresas cargadas desde el endpoint
    };
  },
  created() {
    // Cargar las empresas desde el endpoint al cargar el componente
    this.fetchEmpresas();
  },
  methods: {
    fetchEmpresas() {
      // Llamar al endpoint de empresas utilizando Axios (cambia this.$axios a axios)
      axios
        .get("/empresas")
        .then((response) => {
          // Formatear las empresas como 'id-nombre' y almacenarlas en 'empresas'
          this.empresas = response.data.map((empresa) => ({
            id: empresa.id,
            nombre: empresa.nombre,
          }));
        })
        .catch((error) => {
          console.error("Error al cargar empresas:", error);
        });
    },
    seleccionar() {
      // Manejar la acción de selección aquí
      this.$router.push('/dashboard');
    },
  },
}
</script>

<style scoped>
.center-image {
  text-align: center;
}

/* Estilos adicionales según tus preferencias */
</style>
