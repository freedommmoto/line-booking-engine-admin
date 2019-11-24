<template>
    <div class="app">
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'full',
        components: {},
        computed: {
            name () {
                return this.$route.name
            },
            list () {
                return this.$route.matched.filter((route) => route.name || route.meta.label )
            }
        }
    }
</script>