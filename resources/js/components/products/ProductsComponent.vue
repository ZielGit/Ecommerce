<template>
    <section>
        <div class="row">
            <product-card-component v-bind:product="product" v-for="product in products"></product-card-component>
        </div>
    </section>
</template>

<script>
import ProductCardComponent from './ProductCardComponent.vue'
    export default {
  components: { ProductCardComponent },
        data(){
            return {
                products: [
                    {title: 'curso', price: 200, description: 'Hola mundo'},
                    {title: 'curso', price: 200, description: 'Hola mundo'}
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>