<template>
  <button class="btn btn-lg" @click.prevent="eliminarOfertaBanner">
    <i class="fas fa-trash-alt text-danger"></i>
  </button>
</template>

<script>
export default {
  props: ["configuracionId", "banner"],
  methods: {
    eliminarOfertaBanner() {
      this.$swal({
        title: "Desea eliminar este banner?",
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
         
         if(this.banner === '1'){
           axios.post(`/admin/configuracion/${this.configuracionId}/bannerOferta1`, {params, _method:'delete'}).then(respuesta => {
           console.log(respuesta);
           this.$swal({
             position: 'top-end',
             icon: 'success',
             title: 'Banner Eliminado',
             showConfirmButton: false,
             timer: 1500
             });
   
             
             setTimeout(() => {
               location.reload();
             }, 500);
             
           }).catch(function (error) {
             console.log(error);
           });
         }
          if(this.banner === '2'){
           axios.post(`/admin/configuracion/${this.configuracionId}/bannerOferta2`, {params, _method:'delete'}).then(respuesta => {
           console.log(respuesta);
           this.$swal({
             position: 'top-end',
             icon: 'success',
             title: 'Banner Eliminado',
             showConfirmButton: false,
             timer: 1500
             });
   
             
             setTimeout(() => {
               location.reload();
             }, 500);
             
           }).catch(function (error) {
             console.log(error);
           });
         }
        }
      });
    },
  },
};
</script>