<template>
    <section>
        <div class="row">
            <product-card-component v-bind:key="product.id" v-bind:product="product" v-for="product in products"></product-card-component>
        </div>
    </section>
</template>

<script>
import ProductCardComponent from './ProductCardComponent.vue'
    export default {
  components: { ProductCardComponent },
        data(){
            return {
                products: [],
                endpoint: "/productos"
            }
        },
        created(){
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios.get(this.endpoint).then((response)=>{
                    console.log(response.data.data);
                    this.products = response.data.data;
                });
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>