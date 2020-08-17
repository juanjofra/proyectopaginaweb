<template>
  <button type="submit" class="btn btn-lg" @click="eliminarProducto">
    <i class="fas fa-trash-alt text-danger"></i>
  </button>
</template>

<script>
export default {
  props: ["productoId"],
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
          axios.post(`/admin/producto/${this.productoId}`, {params, _method:'delete'}).then(respuesta => {
             
           

          if(respuesta.data === true){
            this.$swal({
            position: 'top-end',
            icon: 'success',
            title: 'Producto Eliminado',
            showConfirmButton: false,
            timer: 1000
            });
  
            //Eliminar del don la fila
            setTimeout(() => {
              location.reload();
            }, 1);
            return;
          }else{
            this.$swal({
              icon: 'error',
              title: 'Error',
              text: 'El producto tiene fotos de galeria, eliminelos antes de poder eliminar el producto'
            });
          }

          }).catch(function (error) {
            console.log(error);
          });

         
        }
      });
    },
  },
};
</script>