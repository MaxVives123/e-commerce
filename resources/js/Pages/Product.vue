<!-- resources/js/Pages/Product.vue -->

<template>
    <div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900">{{ product.name }}</h1>
        <p class="mt-4 text-xl text-gray-700">{{ product.price }}</p>
        <div class="mt-6">
          <img :src="product.imageSrc" :alt="product.imageAlt" class="w-full h-auto object-contain rounded-lg" />
        </div>
        <p class="mt-4 text-gray-600">{{ product.description }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      product: {
        type: Object,
        required: true
      },
    },
    mounted() {
      console.log(this.product);
    }
  };
  </script>
  
  <style scoped>
  /* Puedes agregar estilos adicionales aquí */
  </style>
  