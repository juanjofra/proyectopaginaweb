<template>
  <button type="submit" class="btn btn-sm" v-if="this.productoDestacado === '0'" @click="destacarproducto"><i class="fas fa-toggle-off"></i></button>
  <button type="submit" class="btn btn-sm" v-else @click="noDestacar"><i class="fas fa-toggle-on"></i></button>

</template>

<script>
export default {
  props: ["productoId", "productoDestacado"],
  methods: {
    destacarproducto() {
          axios.post(`/admin/producto/destacar/${this.productoId}`).then(respuesta => {
            console.log( respuesta.data);
          });
            this.$swal({
            position: 'top-end',
            icon: 'success',
            title: 'Producto Destacado',
            showConfirmButton: false,
            timer: 1000});
  
            
            setTimeout(() => {
              location.reload();
            }, 500);
    },
    noDestacar(){
      axios.post(`/admin/producto/nodestacar/${this.productoId}`).then(respuesta => {
            console.log(respuesta.data);
          });
          this.$swal({
            position: 'top-end',
            icon: 'success',
            title: 'Producto no destacado',
            showConfirmButton: false,
            timer: 1000});
  
            
            setTimeout(() => {
              location.reload();
            }, 500);
    }
  },
}
</script>