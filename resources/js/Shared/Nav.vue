<template>
    <ul>
       <li><Link href="/">Home</Link></li> 
       <li><Link href="/about">About</Link></li> 
       <li><Link href="/faq">Faq</Link></li> 
    </ul>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link
    }
}
</script>