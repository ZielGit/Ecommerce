<template lang="html">
    <div>
        <a href="/carrito">Mi carrito {{ productsCount }}</a>
    </div>
</template>

<script>
    export default {
        props: ["count"],
        created(){
            window.store.commit("set", this.count);
        },
        computed: {
            productsCount(){
                return window.store.state.productsCount;
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>