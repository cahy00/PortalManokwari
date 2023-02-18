<template>
    <Navbar />
    <main id="main">
        <slot />
    </main>
    <Footer />
</template>

<script>
import Navbar from "../Components/User/Navbar.vue";
import Footer from "../Components/Footer.vue";

export default {
    components: {
        Navbar,
        Footer,
    },
};
</script>
