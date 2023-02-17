<template>
    <Head title="Post"></Head>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Postingan</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <Link
                                    href="/post/create"
                                    class="btn btn-md btn-primary"
                                    ><i class="fas fa-plus"></i>
                                    Tambah
                                </Link>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Thumbnail</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="posts in post" :key="posts.id">
                                    <td>1</td>
                                    <td>{{ posts.title }}</td>
                                    <td>{{ posts.category.title }}</td>
                                    <td>
                                        <img
                                            v-bind:src="posts.thumbnail"
                                            class="img-thumbnail img-circle"
                                            style="width: 50%; height: 150px"
                                        />
                                    </td>
                                    <td>
                                        <span
                                            class="btn btn-pill btn-success btn-sm"
                                            >Success</span
                                        >
                                    </td>
                                    <!-- <td v-html="posts.body"></td> -->
                                    <td>
                                        <Link
                                            :href="`/admin/show/${posts.id}`"
                                            class="btn btn-default"
                                            ><i class="fa fa-plus-circle"></i
                                            >Show</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import Footer from "../../../Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    layout: Layout,
    components: {
        Footer,
        Link,
        Head,
    },
    props: {
        post: Object,
    },
};
</script>
