<template>
    <Nav />
    <div>Hello, {{ name }}</div>
</template>

<script>
import Nav from '../Shared/Nav.vue'
export default {
    components: {
        Nav
    },
    props: {
        name: {
            type: String,
            required: true
        }
    }
}
</script>