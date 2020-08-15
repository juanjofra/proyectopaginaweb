<template>
  <button type="submit" class="btn btn-lg" @click="eliminarProducto">
    <i class="fas fa-trash-alt text-danger"></i>
  </button>
</template>

<script>
export default {
  props: ["productoId"],
  mounted() {
    console.log("producto id ", this.productoId);
  },
  methods: {
    eliminarProducto() {
      this.$swal({
        title: "Desea eliminar este producto?",
        text: "Una vez eliminada, no se puede recuperar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si!",
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.value) {

          const params = {
            id: this.productoId
          }

          axios.post(`/producto/${this.productoId}`, {params, _method:'delete'}).then(respuesta => {
             
            

             this.$swal({
              position: 'top-end',
              icon: 'success',
              title: 'Producto Eliminado',
              showConfirmButton: false,
              timer: 1000
            });

            //Eliminar del don la fila
            //this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
             setTimeout(() => {
               location.reload();
             }, 1000);

          });

         
        }
      });
    },
  },
};
</script>