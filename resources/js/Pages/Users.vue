<template>
    <Head>
        <title>Users</title>
        <meta type="description" content="All Users" head-key="description" />
    </Head>
    <ul>
        <li v-for="user in users" :key="user.id">
            <h3>{{user.name}}</h3>
            <span>{{ user.email}}</span>
        </li>
    </ul>
</template>

<script>
export default {
    props: {
        users: Array
    }
}
</script>
