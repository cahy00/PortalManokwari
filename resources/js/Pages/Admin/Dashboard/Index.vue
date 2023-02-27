<template>
    <Head title="Admin - Dashboard"></Head>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Post</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="medium text-white stretched-link"
                                    href="#"
                                    >{{ post }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Draft</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="medium text-white stretched-link"
                                    href="#"
                                    >{{ draft }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Category</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="small text-white stretched-link"
                                    href="#"
                                    >{{ category }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Pengumuman</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="small text-white stretched-link"
                                    href="#"
                                    >{{ hero }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
// import { Link } from "@inertiajs/inertia-vue3";
import Footer from "../../../Components/Footer.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    layout: Layout,
    components: {
        Footer,
        Head,
    },
    props: {
        post: Number,
        category: Number,
        draft: Number,
        hero: Number,
    },
};
</script>
