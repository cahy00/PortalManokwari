<template>
    <Head title="Post"></Head>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Draft Postingan</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h5>
                                    <i class="fa fa-bookmark"></i> Daftar Draft
                                </h5>
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
                                <tr v-for="drafts in draft" :key="drafts.id">
                                    <td>1</td>
                                    <td>{{ drafts.title }}</td>
                                    <td>{{ drafts.category.title }}</td>
                                    <td>
                                        <img
                                            v-bind:src="drafts.thumbnail"
                                            class="img-thumbnail img-circle"
                                            style="width: 50%; height: 150px"
                                        />
                                    </td>
                                    <td v-if="drafts.status == 1">
                                        <span
                                            class="btn btn-pill btn-success btn-sm"
                                            >Published</span
                                        >
                                    </td>
                                    <td v-if="drafts.status == 0">
                                        <span
                                            class="btn btn-pill btn-warning btn-sm"
                                            >Draft</span
                                        >
                                    </td>
                                    <!-- <td v-html="drafts.body"></td> -->
                                    <td>
                                        <Link
                                            :href="`/admin/show/${drafts.id}`"
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
        draft: Object,
    },
    created() {
        $(document).ready(function () {
            $("#datatablesSimple").DataTable({});
        });
    },
};
</script>
