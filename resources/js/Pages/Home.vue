<template>
    <Head>
        <title>Home</title>
        <meta type="description" content="Home Description" head-key="description">
    </Head>
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
