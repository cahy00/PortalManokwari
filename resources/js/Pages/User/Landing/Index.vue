<template>
    <section
        id="hero-fullscreen"
        class="hero-fullscreen d-flex align-items-center"
    >
        <div
            class="container d-flex flex-column align-items-center position-relative"
            data-aos="zoom-out"
        >
            <h2>Welcome to <span>HeroBiz</span></h2>
            <p>
                Et voluptate esse accusantium accusamus natus reiciendis quidem
                voluptates similique aut.
            </p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto"
                    >Get Started</a
                >
                <a
                    href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox btn-watch-video d-flex align-items-center"
                    ><i class="bi bi-play-circle"></i
                    ><span>Watch Video</span></a
                >
            </div>
        </div>
    </section>
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">
            <div class="row g-5">
                <div
                    class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first"
                >
                    <h3>
                        Alias sunt quas <em>Cupiditate</em> oluptas hic minima
                    </h3>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="cta-btn align-self-start" href="#"
                        >Call To Action</a
                    >
                </div>

                <div
                    class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center"
                >
                    <div class="img">
                        <img
                            v-bind:src="`assets/img/cta.jpg`"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../../../Layouts/LayoutUser.vue";
import Clients from "../../../Components/User/Clients.vue";

export default {
    components: {
        Clients,
    },
    layout: Layout,
};
</script>
