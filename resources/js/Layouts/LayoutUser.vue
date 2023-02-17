<template>
    <Navbar />
    <slot />

    <a
        href="#"
        class="scroll-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
    ></a>
</template>

<script>
import Navbar from "../Components/User/Navbar.vue";

export default {
    components: {
        Navbar,
    },
};
</script>
